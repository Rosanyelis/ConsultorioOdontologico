<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        if(Auth::user()->rol->name == 'Doctor')
        {
            $doctorId = Auth::user()->id;
            $data = Patient::where('doctor_id', '=', $doctorId)->get();
        }else{
            $data = Patient::all();
        }

        return view('patients.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctors = Doctor::all();
        return view('patients.create', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientStoreRequest $request)
    {
        if(Auth::user()->rol->name == 'Doctor'){
            $doctorId = Auth::user()->id;
        }
        if (Auth::user()->rol->name == 'Secretaria' || Auth::user()->rol->name == 'Desarrollador') {
            $doctorId = $request->doctor_id;
        }
        $birthdate = Carbon::parse($request->birthdate);
        $lastvisit = Carbon::parse($request->last_visit_date);

        if(!$request->age){
            $age = $request->age;
        }else{
            $age = $birthdate->age;
        }
        $patient = Patient::create([
            'doctor_id'         => $doctorId,
            'firstname'         => $request->firstname,
            'second_name'       => $request->second_name,
            'lastname'          => $request->lastname,
            'second_surname'    => $request->second_surname,
            'phone'             => $request->phone,
            'whatsapp'          => $request->whatsapp,
            'birthdate'         => $birthdate->format('Y-m-d'),
            'age'               => $age,
            'sex'               => $request->sex,
            'civil_status'      => $request->civil_status,
            'occupation'        => $request->occupation,
            'last_visit_date'   => $lastvisit->format('Y-m-d'),
        ]);

        PatientHealth::create([
            'patient_id'        => $patient->id,
            'has_disease'       => $request->has_disease,
            'disease'           => $request->disease,
            'medical_treatment' => $request->medical_treatment,
            'treatment_text'    => $request->treatment_text,
            'allergies'         => $request->allergies,
            'epilepsy'          => $request->epilepsy,
            'anemia'            => $request->anemia,
            'hepatitis'         => $request->hepatitis,
            'hypertension'      => $request->hypertension,
            'vih'               => $request->vih,
            'hypotension'       => $request->hypotension,
            'tuberculosis'      => $request->tuberculosis,
            'heart_disease'     => $request->heart_disease,
            'have_diabetes'     => $request->have_diabetes,
            'type_diabete'      => $request->type_diabete,
            'pregnant'          => $request->pregnant,
            'drugs'             => $request->drugs,
            'alcohol'           => $request->alcohol,
            'tobacco'           => $request->tobacco,
            'asthma'            => $request->asthma,
            'asthma_text'       => $request->asthma_text,
            'ets'               => $request->ets,
            'ets_text'          => $request->ets_text,
            'harmful_habits'    => $request->harmful_habits,
        ]);

        return redirect()->route('patient.index')->with('success', 'El registro de paciente se ha creado exitósamente.');
    }

    public function create_examen_intraoral(string $id)
    {
        $data = Patient::find($id);
        $teeths = Teeth::all();
        return view('patients.intraoral-exams', compact('data', 'teeths'));
    }

    public function store_examen_intraoral(StoreExamInstraoral $request, $id)
    {
        $exam = IntraoralExam::create([
            'patient_id'            => $id,
            'cheeks'                => $request->cheeks,
            'mucous_membranes'      => $request->mucous_membranes,
            'gums'                  => $request->gums,
            'language'              => $request->language,
            'palate'                => $request->palate,
            'torus'                 => $request->torus,
            'aftas'                 => $request->aftas,
            'supragingival_tartar'  => $request->supragingival_tartar,
            'subgingival'           => $request->subgingival,
            'plate'                 => $request->plate,
            'crowding'              => $request->crowding,
            'observations'          => $request->observation,
        ]);

        $data = json_decode($request->teethData);

        foreach($data as $item){
            IntraoralExaminationTeeth::create([
                'intraoral_exams_id'    => $exam->id,
                'teeths_id'             => $item->code_teeth,
                'treatment'             => $item->typeTreat,
            ]);
        }

        return redirect()->route('patient.index')->with('success', 'El Examen IntraOral fue registrado exitósamente.');
    }

    public function create_treatment_plan(string $id)
    {
        $data = Patient::find($id);
        $teeths = Teeth::all();
        return view('patients.treatment-plan', compact('data', 'teeths'));
    }

    public function store_treatment_plan(Request $request, $id)
    {
        $exam = TreatmentPlan::create([
            'patient_id'            => $id,
            'other_treatments'      => $request->other_treatments,
        ]);

        $data = json_decode($request->teethData);

        foreach($data as $item){
            TreatmentPlanDetails::create([
                'treatment_plan_id'    => $exam->id,
                'teeths_id'             => $item->code_teeth,
                'treatment'             => $item->typeTreat,
            ]);
        }

        return redirect()->route('patient.index')->with('success', 'El Plan de Tratamiento fue registrado exitósamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Patient::find($id);
        $doctors = Doctor::all();
        return view('patients.show', compact('data', 'doctors'));
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
        return view('histories.create', compact('data', 'teeths'));
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
            'total'                 => number_format($request->total, 2, ".", ","),
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


    public function create_signature(string $id)
    {
        $data = Patient::find($id);
        return view('patients.signature', compact('data'));
    }

    public function store_signature(Request $request, $id)
    {
         // Decodificar la imagen
        $img = $request->signature;
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);

        $filename = $id.'-signature-' . time() . '.png';
        file_put_contents(public_path('signatures/' . $filename), $data);

        $patient = Patient::find($id);
        $patient->url_signature = $filename;
        $patient->save();

        return redirect()->route('patient.index')->with('success', 'La Firma fue registrada exitósamente.');
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
        if(Auth::user()->rol->name == 'Doctor')
        {
            $doctorId = Auth::user()->id;
        }else{
            $doctorId = null;
        }
        $birthdate = Carbon::parse($request->birthdate);
        $lastvisit = Carbon::parse($request->last_visit_date);

        if(!$request->age){
            $age = $request->age;
        }else{
            $age = $birthdate->age;
        }
        $patient = Patient::find($id);
        $patient->doctor_id         = $doctorId;
        $patient->firstname         = $request->firstname;
        $patient->second_name       = $request->second_name;
        $patient->lastname          = $request->lastname;
        $patient->second_surname    = $request->second_surname;
        $patient->phone             = $request->phone;
        $patient->whatsapp          = $request->whatsapp;
        $patient->birthdate         = $birthdate->format('Y-m-d');
        $patient->age               = $age;
        $patient->sex               = $request->sex;
        $patient->civil_status      = $request->civil_status;
        $patient->occupation        = $request->occupation;
        $patient->last_visit_date   = $lastvisit->format('Y-m-d');
        $patient->save();

        return redirect()->back()->with('success', 'El Paciente fue actualizado exitósamente.');
    }

    public function import(Request $request)
    {
        // dd($request->importpatient);
        Excel::import(new PatientsImport, $request->importpatient);
        return redirect()->back()->with('success', 'Datos de Pacientes Importados con Éxito.');
    }
}
