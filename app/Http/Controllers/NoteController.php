<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $exam = Note::create([
            'patient_id'            => $id,
            'grades'                => $request->grades,
        ]);

        return redirect()->route('patient.show', $id)->with('success', 'La Nota fue registrada exitósamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, $note)
    {
        $note = Note::find($note);
        $note->delete();

        return redirect()->route('patient.show', $id)->with('success', 'La Nota fue eliminada exitosamente.');
    }
}
