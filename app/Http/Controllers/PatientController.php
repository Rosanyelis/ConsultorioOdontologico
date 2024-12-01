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


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Patient::find($id);

        return view('patients.show', compact('data'));
    }


    public function create_record_dental(string $id)
    {
        $data = Patient::find($id);
        return view('dental_records.create', compact('data'));
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

        return redirect()->route('patient.show', $id)->with('success', 'La Factura fue registrada exitósamente.');
    }

    public function pay_invoice(string $id, string $pay_id)
    {
        $data = Billing::where('patient_id', $id)->where('id', $pay_id)->first();
        return view('patients.abonar', compact('data'));
    }

    public function store_pay_invoice(StorePayInvoice $request, $id, $pay_id)
    {
        $billing = Billing::where('patient_id', $id)->where('id', $pay_id)->firstOrFail();
        $total_abonos = $billing->payments->sum('pay_amount');
        $saldo_pendiente = $billing->total - $total_abonos;

        // Validar si el monto del abono excede el saldo pendiente
        if ($request->pay_amount > $saldo_pendiente) {
            return redirect()->back()->with('error', 'El monto de abono excede el saldo pendiente de la Factura.');
        }

        // Actualizar estado de la factura
        $nuevo_total_abonado = $total_abonos + $request->pay_amount;

        if ($nuevo_total_abonado == $billing->total) {
            $billing->status = 'Pagado';
        } else {
            $billing->status = 'Pendiente';
        }

        $billing->save();

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
        $patient->birthdate         = $birthdate->format('Y-m-d');
        $patient->age               = $age;
        $patient->save();

        return redirect()->back()->with('success', 'El Paciente fue actualizado exitósamente.');
    }

    public function import(Request $request)
    {
        Excel::import(new PatientsImport, $request->importpatient);
        return redirect()->back()->with('success', 'Datos de Pacientes Importados con Éxito.');
    }


}
