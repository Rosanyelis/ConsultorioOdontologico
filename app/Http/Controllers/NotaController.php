<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Http\Requests\StoreNotaRequest;
use App\Http\Requests\UpdateNotaRequest;

class NotaController extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNotaRequest $request, $nota)
    {
        $data = $request->all();
        $data['users_id'] = Auth()->user()->id;
        $data['expendientes_id'] = $nota;
        Nota::create($data);
        return redirect()->back()->with('success', 'La Nota fue registrada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($expendiente, $nota)
    {
        $nota = Nota::find($nota);
        $nota->delete();
        return redirect()->back()->with('success', 'La Nota fue eliminada exitosamente.');
    }
}
