<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\DentalRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDentalRecord;

class DentalRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $data = Patient::find($id);
        return view('dental_records.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $data = Patient::find($id);
        return view('dental_records.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDentalRecord $request, $id)
    {
        $publicUrl = null;
        if ($request->hasFile('archivo')) {
            $file = $request->file('archivo');
            // Generate a unique filename
            $filename = time() . '_' . $file->getClientOriginalName();
            // Store the file using Laravel's built-in storage system
            $filePath = $file->storeAs('public/files', $filename);
            // Get the public URL to the file
            $publicUrl = Storage::url($filePath);

        } else {
            return redirect()->back()->with('error', 'No se pudo subir el archivo.');
        }
        $data = DentalRecord::create([
            'patient_id'      => $id,
            'type_image'      => $request->type_image,
            'url_file'        => $publicUrl,
            'observations'    => $request->observations,
        ]);

        return redirect()->route('patient.show', $id)->with('success', 'El Registro Dental fue registrado exitósamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, string $dentalRecord)
    {
        $data = DentalRecord::where('patient_id', $id)->find($dentalRecord);
        return view('dental_records.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DentalRecord $dentalRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DentalRecord $dentalRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DentalRecord $dentalRecord)
    {
        //
    }
}
