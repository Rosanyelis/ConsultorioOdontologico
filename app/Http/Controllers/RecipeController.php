<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Patient;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ObservationTemplate;
use App\Models\MedicationInstruction;
use App\Models\MedicationPrescription;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $data = Patient::find($id);
        $medicines = Medicine::all();
        $indications = MedicationInstruction::all();
        $templates = ObservationTemplate::all();
        return view('recipes.create', compact('data', 'medicines', 'indications','templates'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
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

        return redirect()->route('patient.show', $id)
            ->with('success', 'La Receta fue registrada exitósamente.')
            ->with('activeTab', 'recetas');
    }

    /**
     * Display the specified resource.
     */
    public function show($id, $recipe_id)
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
    }

    public function templates($template)
    {
        $data = ObservationTemplate::where('name', $template)->first();
        return response()->json($data);
    }

}
