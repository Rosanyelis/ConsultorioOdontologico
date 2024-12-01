<?php

namespace App\Http\Controllers;

use App\Models\MedicationInstruction;
use Illuminate\Http\Request;

class MedicationInstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MedicationInstruction::all();
        return view('medication_instruction.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $template = MedicationInstruction::where('description', $request->description)->first();
        if ($template) {
            return redirect()->back()->with('error', 'La instruccion de medicamentos ya existe, intente de nuevo');
        }

        MedicationInstruction::create($request->all());
        return redirect()->back()->with('success', 'El registro se ha creado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($medicationInstruction)
    {
        MedicationInstruction::find($medicationInstruction)->delete();
        return redirect()->back()->with('success', 'El registro se ha eliminado exitosamente.');
    }
}
