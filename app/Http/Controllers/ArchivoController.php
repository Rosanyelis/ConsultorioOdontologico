<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Http\Requests\StoreArchivoRequest;
use App\Http\Requests\UpdateArchivoRequest;

class ArchivoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArchivoRequest $request, $expediente)
    {

        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '-' . $filename;
        $file->move(public_path('/storage/expedientes/' . $expediente . '/archivos'), $filename);
        $url = '/storage/expedientes/' . $expediente . '/archivos/' . $filename;

        $archivo = Archivo::create([
            'users_id' => auth()->user()->id,
            'expendientes_id' => $expediente,
            'url' => $url,
            'name' => $filename,
            'extension' => $extension,
            'description' => $request->description
        ]);

        return redirect()->back()->with('success', 'El archivo fue registrado exitosamente.');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($expendiente, $archivo)
    {
        $archivo = Archivo::find($archivo);
        $archivo->delete();
        return redirect()->back()->with('success', 'El archivo fue eliminado exitosamente.');
    }
}
