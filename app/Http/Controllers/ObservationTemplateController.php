<?php

namespace App\Http\Controllers;

use App\Models\ObservationTemplate;
use Illuminate\Http\Request;

class ObservationTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ObservationTemplate::all();
        return view('observation_templates.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validar que en la bases de datos no exista el mismo tratamiento
        $template = ObservationTemplate::where('name', $request->name)->first();
        if ($template) {
            return redirect()->back()->with('error', 'La plantilla de observaciones ya existe, intente de nuevo');
        }
        ObservationTemplate::create($request->all());
        return redirect()->back()->with('success', 'El registro se ha creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ObservationTemplate $observationTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ObservationTemplate $observationTemplate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ObservationTemplate $observationTemplate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ObservationTemplate $observationTemplate)
    {
        //
    }
}
