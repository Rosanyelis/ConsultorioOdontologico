<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\PatientHealth;
use App\Http\Requests\PatientStoreRequest;

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
        // dd($request);
        $birthdate = Carbon::parse($request->birthdate);
        $lastvisit = Carbon::parse($request->last_visit_date);
        $patient = Patient::create([
            'firstname'         => $request->firstname,
            'second_name'       => $request->second_name,
            'lastname'          => $request->lastname,
            'second_surname'    => $request->second_surname,
            'phone'             => $request->phone,
            'whatsapp'          => $request->whatsapp,
            'birthdate'         => $birthdate->format('Y-m-d'),
            'age'               => $request->age,
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

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
