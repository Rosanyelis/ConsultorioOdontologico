<?php

namespace App\Http\Controllers;

use App\Models\Teeth;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\DentalHistory;
use App\Models\ReasonTreatment;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\TypeOfTreatments;
use App\Http\Requests\StoreHistory;
use App\Models\DentalHistoryDetails;

class HistoryDentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $data = Patient::find($id);
        return view('histories.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $data = Patient::find($id);
        $teeths = Teeth::all();
        $treatments = TypeOfTreatments::all();
        $reason = ReasonTreatment::all();
        return view('histories.create', compact('data', 'teeths', 'treatments', 'reason'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHistory $request, $id)
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

        return redirect()->route('patient.show', $id)
        ->with('success', 'La Historia Dental fue registrada exitósamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, string $history_id)
    {
        $data = DentalHistory::where('patient_id', $id)->where('id', $history_id)->first();
        return view('histories.show', compact('data'));
    }

    public function print_history($id)
    {
        $data = Patient::find($id);
        $pdf = Pdf::loadView('patients.historypdf', compact('data'));
        $pdf->setPaper('letter', 'portrait');
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
