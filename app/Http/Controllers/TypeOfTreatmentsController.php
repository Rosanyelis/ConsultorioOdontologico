<?php

namespace App\Http\Controllers;

use App\Models\TypeOfTreatments;
use Illuminate\Http\Request;

class TypeOfTreatmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TypeOfTreatments::all();
        return view('type_treatments.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validar que en la bases de datos no exista el mismo tratamiento
        $typeOfTreatments = TypeOfTreatments::where('name', $request->name)->first();
        if ($typeOfTreatments) {
            return redirect()->back()->with('error', 'El Tipo de Tratamiento ya existe, intente de nuevo');
        }

        TypeOfTreatments::create([
            'name' => $request->name
        ]);

        return redirect()->route('treatments.index')->with('success', 'Tipo de Tratamiento creado correctamente');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $typeOfTreatments)
    {
        // validar que en la bases de datos no exista el mismo tratamiento
        $typeOfTreatments = TypeOfTreatments::where('name', $request->name)
                            ->where('id', '!=', $typeOfTreatments)
                            ->count();
        if ($typeOfTreatments > 0) {
            return redirect()->back()->with('error', 'El Tipo de Tratamiento ya existe, intente de nuevo');
        }

        $type = TypeOfTreatments::find($typeOfTreatments);
        $type->name = $request->name;
        $type->save();

        return redirect()->route('treatments.index')->with('success', 'Tipo de Tratamiento actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($typeOfTreatments)
    {
        $type = TypeOfTreatments::find($typeOfTreatments);
        $type->delete();
        return redirect()->route('treatments.index')->with('success', 'Tipo de Tratamiento eliminado correctamente');
    }
}
