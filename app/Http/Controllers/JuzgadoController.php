<?php

namespace App\Http\Controllers;

use App\Models\Juzgado;
use Illuminate\Support\Str;
use App\Http\Requests\StoreJuzgadoRequest;
use App\Http\Requests\UpdateJuzgadoRequest;

class JuzgadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Juzgado::all();
        return view('juzgados.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('juzgados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJuzgadoRequest $request)
    {
        $juzgado = Juzgado::create(['name' => Str::upper($request->name)]);
        return redirect()->route('juzgado.index')->with('success', 'El registro se ha creado exitosamente.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($juzgado)
    {
        $data = Juzgado::find($juzgado);
        return view('juzgados.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJuzgadoRequest $request, $juzgado)
    {
        $juzgado = Juzgado::find($juzgado);
        $juzgado->name = Str::upper($request->name);
        $juzgado->save();
        return redirect()->route('juzgado.index')->with('success', 'El registro se ha actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($juzgado)
    {
        $juzgado = Juzgado::find($juzgado);
        $expedientes = $juzgado->expedientes()->count();
        if ($expedientes > 0) {
            return redirect()->route('juzgado.index')->with('error', 'No se puede eliminar el juzgado porque tiene expedientes asociados.');
        }
        $juzgado->delete();
        return redirect()->route('juzgado.index')->with('success', 'El registro se ha eliminado exitosamente.');
    }
}
