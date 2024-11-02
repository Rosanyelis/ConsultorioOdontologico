<?php

namespace App\Http\Controllers;

use App\Models\CuentaCobrar;
use App\Models\AbonoCuentaCobrar;
use App\Http\Requests\StoreCuentaCobrarRequest;
use App\Http\Requests\UpdateCuentaCobrarRequest;

class CuentaCobrarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CuentaCobrar::all();
        return view('cuentas-cobrar.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function abonar($cuentaCobrar)
    {
        $data = CuentaCobrar::find($cuentaCobrar);
        return view('cuentas-cobrar.abonar', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCuentaCobrarRequest $request, $cuentaCobrar)
    {
        $data = $request->all();
        $data['users_id'] = auth()->user()->id;
        $data['cuenta_cobrars_id'] = $cuentaCobrar;
        AbonoCuentaCobrar::create($data);
        return redirect()->route('cuenta-cobrar.index')->with('success', 'El registro se ha creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($cuentaCobrar)
    {
        $data = CuentaCobrar::find($cuentaCobrar);
        return view('cuentas-cobrar.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CuentaCobrar $cuentaCobrar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCuentaCobrarRequest $request, CuentaCobrar $cuentaCobrar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CuentaCobrar $cuentaCobrar)
    {
        //
    }
}
