<?php

namespace App\Http\Controllers;

use App\Models\ReasonTreatment;
use Illuminate\Http\Request;

class ReasonTreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ReasonTreatment::all();
        return view('reason_treatment.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $motivo = ReasonTreatment::where('name', $request->name)->first();
        if ($motivo) {
            return redirect()->back()->with('error', 'El Motivo de Consulta ya existe, intente de nuevo');
        }
        ReasonTreatment::create($request->all());

        return redirect()->route('reason-treatment.index')->with('success', 'Motivo de Consulta creado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(ReasonTreatment $reasonTreatment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($reasonTreatment)
    {
        $data = ReasonTreatment::find($reasonTreatment);
        return view('reason_treatment.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $reasonTreatment)
    {
        $data = ReasonTreatment::find($reasonTreatment);
        $data->update($request->all());
        return redirect()->route('reason-treatment.index')->with('success', 'Motivo de Consulta actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReasonTreatment $reasonTreatment)
    {
        //
    }
}
