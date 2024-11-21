<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\File;
use App\Models\Note;
use App\Models\Teeth;
use App\Models\Doctor;
use App\Models\Recipe;
use App\Models\Billing;
use App\Models\Patient;
use App\Models\PayInvoice;
use Illuminate\Http\Request;
use App\Models\DentalHistory;
use App\Models\IntraoralExam;
use App\Models\InvoiceDetail;
use App\Models\PatientHealth;
use App\Models\TreatmentPlan;
use App\Imports\PatientsImport;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\TypeOfTreatments;
use App\Http\Requests\StoreHistory;
use App\Models\DentalHistoryDetails;
use App\Models\TreatmentPlanDetails;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StorePayInvoice;
use App\Models\MedicationPrescription;
use App\Models\IntraoralExaminationTeeth;
use App\Http\Requests\PatientStoreRequest;
use App\Http\Requests\StoreExamInstraoral;
use Intervention\Image\Drivers\Imagick\Driver;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Patient::all();
        return view('patients.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientStoreRequest $request)
    {
        $birthdate = Carbon::parse($request->birthdate);
        if(!$request->age){
            $age = $request->age;
        }else{
            $age = $birthdate->age;
        }
        $patient = Patient::create([
            'dni'               => $request->dni,
            'firstname'         => $request->firstname,
            'lastname'          => $request->lastname,
            'second_surname'    => $request->second_surname,
            'phone'             => $request->phone,
            'whatsapp'          => $request->whatsapp,
            'birthdate'         => $birthdate->format('Y-m-d'),
            'age'               => $age,
        ]);

        PatientHealth::create([
            'patient_id'        => $patient->id,
            'has_disease'       => $request->has_disease,
            'disease'           => $request->disease,
            'allergies'         => $request->allergies,
            'epilepsy'          => $request->epilepsy,
            'hepatitis'         => $request->hepatitis,
            'hypertension'      => $request->hypertension,
            'heart_disease'     => $request->heart_disease,
            'have_diabetes'     => $request->have_diabetes,
            'pregnant'          => $request->pregnant,
            'dental_floss'      => $request->dental_floss,
            'tooth_pain'        => $request->tooth_pain,
            'bad_smell_taste'   => $request->bad_smell_taste,
        ]);

        return redirect()->route('patient.index')->with('success', 'El registro de paciente se ha creado exitósamente.');
    }

    public function create_examen_intraoral(string $id)
    {
        $data = Patient::find($id);
        $teeths = Teeth::all();
        return view('patients.intraoral-exams', compact('data', 'teeths'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Patient::find($id);
        return view('patients.show', compact('data'));
    }

    public function showteethIntraoralAjax(string $id)
    {
        $examen = Patient::find($id);
        $data = $examen->intraoral_exam->intraoralExamDetails;
        return $data;
    }
    public function showTreatmentPlanAjax(string $id)
    {
        $examen = Patient::find($id);
        $data = $examen->treatment_plan->TreatmentPlanDetails;
        return $data;
    }

    public function create_history_dental(string $id)
    {
        $data = Patient::find($id);
        $teeths = Teeth::all();
        $treatments = TypeOfTreatments::all();
        return view('histories.create', compact('data', 'teeths', 'treatments'));
    }

    public function store_history_dental(StoreHistory $request, $id)
    {
        $exam = DentalHistory::create([
            'patient_id'            => $id,
            'reason_consultation'   => $request->reason_consultation,
            'observations'          => $request->observations,
        ]);

        $data = json_decode($request->teethData);

        foreach($data as $item){
            DentalHistoryDetails::create([
                'dental_history_id'     => $exam->id,
                'teeths_id'             => $item->code_teeth,
                'treatment'             => $item->typeTreat,
            ]);
        }

        return redirect()->route('patient.index')->with('success', 'La Historia Dental fue registrada exitósamente.');
    }

    public function show_history_dental(string $id, string $history_id)
    {
        $data = DentalHistory::where('patient_id', $id)->where('id', $history_id)->first();
        return view('histories.show', compact('data'));
    }

    public function showteethHistoryDentalAjax(string $history_id)
    {
        $examen = DentalHistoryDetails::where('id', $history_id)->get();
        $data = $examen;
        return response()->json($data);
    }

    public function create_recipe(string $id)
    {
        $data = Patient::find($id);
        return view('recipes.create', compact('data'));
    }

    public function store_recipe(Request $request, $id)
    {
        $exam = Recipe::create([
            'patient_id'            => $id,
            'observations'          => $request->observation,
        ]);

        $data = json_decode($request->recipes);

        foreach($data as $item){
            MedicationPrescription::create([
                'recipe_id'     => $exam->id,
                'medicine'      => $item->medicine,
                'dose'          => $item->dose,
                'instructions'  => $item->instructions,
            ]);
        }

        return redirect()->route('patient.show', $id)->with('success', 'La Receta fue registrada exitósamente.');
    }

    public function show_recipe(string $id, string $recipe_id)
    {
        $data = Recipe::where('patient_id', $id)->where('id', $recipe_id)->first();
        return view('recipes.show', compact('data'));
    }

    public function print_recipe(string $id, string $recipe_id)
    {
        $data = Recipe::where('patient_id', $id)->where('id', $recipe_id)->first();
        $pdf = Pdf::loadView('recipes.recipe', compact('data'));
        $pdf->setPaper('letter', 'portrait');
        $pdf->setPaper([0, 0, 149, 235], 'mm');
        return $pdf->stream();
    }

    public function create_pay(string $id)
    {
        $data = Patient::find($id);
        $type = TypeOfTreatments::all();
        return view('payments.create', compact('data', 'type'));
    }

    public function store_pay(Request $request, $id)
    {
        $exam = Billing::create([
            'patient_id'            => $id,
            'total'                 => $request->total,
            'payment_type'          => $request->payment_type,
            'status'                => $request->status,
            'number_installments'   => $request->number_installments,
        ]);

        $data = json_decode($request->billing);

        foreach($data as $item){
            InvoiceDetail::create([
                'billing_id'     => $exam->id,
                'treatment'      => $item->type,
                'price'          => $item->price,
            ]);
        }

        return redirect()->route('patient.index')->with('success', 'La Factura fue registrada exitósamente.');
    }

    public function pay_invoice(string $id, string $pay_id)
    {
        $data = Billing::where('patient_id', $id)->where('id', $pay_id)->first();
        return view('payments.abonar', compact('data'));
    }

    public function store_pay_invoice(StorePayInvoice $request, $id, $pay_id)
    {
        $data = Billing::where('patient_id', $id)->where('id', $pay_id)->first();
        if ($data->total == $request->pay_amount) {
            $data->status = 'Pagado';
        }
        if ($data->total > $request->pay_amount) {
            $data->status = 'Pendiente';
        }
        if ($data->total < $request->pay_amount) {
            return redirect()->back()->with('error', 'El monto de abono es mayor al monto de la Factura, por favor verifique.');
        }
        $data->save();

        $data = $request->all();
        $data['billing_id'] = $pay_id;
        PayInvoice::create($data);
        return redirect()->route('patient.show', $id)->with('success', 'La Factura fue abonada exitosamente.');
    }

    public function show_pay_invoice(string $id, string $pay_id)
    {
        $data = Billing::where('patient_id', $id)->where('id', $pay_id)->first();
        return view('patients.show-invoice', compact('data'));
    }

    public function store_file(Request $request, $id)
    {
        if ($request->hasFile('archivo')) {
            $uploadPath = public_path('/storage/files/');
            $file = $request->file('archivo');
            $extension = $file->getClientOriginalExtension();
            $name = 'file-' . time();
            $filename = $name . '.' . $extension;
            $file->move($uploadPath, $filename);
            $path = '/storage/files/'.$filename;
        } else {
            return redirect()->back()->with('error', 'No se pudo subir el archivo.');
        }

        File::create([
            'patient_id'   => $id,
            'name'         => $name,
            'path'         => $path,
            'type'         => $extension,
        ]);

        return redirect()->back()->with('success', 'El archivo fue cargado exitósamente.');
    }

    public function store_note(Request $request, $id)
    {
        $exam = Note::create([
            'patient_id'            => $id,
            'grades'                => $request->grades,
        ]);


        return redirect()->route('patient.show', $id)->with('success', 'La Nota fue registrada exitósamente.');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $birthdate = Carbon::parse($request->birthdate);

        if(!$request->age){
            $age = $request->age;
        }else{
            $age = $birthdate->age;
        }
        $patient = Patient::find($id);
        $patient->firstname         = $request->firstname;
        $patient->lastname          = $request->lastname;
        $patient->second_surname    = $request->second_surname;
        $patient->phone             = $request->phone;
        $patient->whatsapp          = $request->whatsapp;
        $patient->birthdate         = $birthdate->format('Y-m-d');
        $patient->age               = $age;
        $patient->save();

        return redirect()->back()->with('success', 'El Paciente fue actualizado exitósamente.');
    }

    public function import(Request $request)
    {
        // dd($request->importpatient);
        Excel::import(new PatientsImport, $request->importpatient);
        return redirect()->back()->with('success', 'Datos de Pacientes Importados con Éxito.');
    }

    public function print_history($id)
    {
        $data = Patient::find($id);
        $pdf = Pdf::loadView('patients.historypdf', compact('data'));
        $pdf->setPaper('letter', 'portrait');
        return $pdf->stream();
    }
}
