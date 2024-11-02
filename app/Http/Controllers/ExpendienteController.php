<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Juzgado;
use App\Models\Materia;
use App\Models\Expendiente;
use App\Models\CuentaCobrar;
use Illuminate\Http\Request;
use App\Http\Requests\StoreExpendienteRequest;
use App\Http\Requests\UpdateExpendienteRequest;

class ExpendienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Expendiente::all();
        return view('expedientes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $materias = Materia::all();
        $juzgados = Juzgado::all();
        return view('expedientes.create', compact('clientes', 'materias', 'juzgados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpendienteRequest $request)
    {
        $data = $request->all();
        $data['sucursals_id'] = 1;
        $data['fecha_inicio'] = $request->fecha_inicio;
        $data['users_id'] = Auth()->user()->id;

        $expediente = Expendiente::create($data);
        CuentaCobrar::create([
            'expendientes_id' => $expediente->id,
            'users_id' => Auth()->user()->id,
            'clientes_id' => $data['clientes_id'],
            'tipo' => $data['tipo_costo'],
            'monto' => $data['valor_porcentaje'],
            'estado' => 'Pendiente',
        ]);
        return redirect()->route('expediente.index')->with('success', 'El registro se ha creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($expendiente)
    {
        $data = Expendiente::find($expendiente);
        return view('expedientes.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($expendiente)
    {
        $data = Expendiente::find($expendiente);
        $clientes = Cliente::all();
        $materias = Materia::all();
        $juzgados = Juzgado::all();
        return view('expedientes.edit', compact('data', 'clientes', 'materias', 'juzgados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpendienteRequest $request, $expediente)
    {
        $data = $request->all();
        $data['sucursals_id'] = 1;
        $data['users_id'] = Auth()->user()->id;
        if ($request->tipo_costo == 'Fijo') {
            $data['costo_porcentaje'] = 0;
            $data['porcentaje_asunto'] = 0;
        }
        Expendiente::find($expediente)->update($data);
        CuentaCobrar::where('expendientes_id', $expediente)->update(['tipo' => $data['tipo_costo'], 'monto' => $data['valor_porcentaje']]);

        return redirect()->route('expediente.index')->with('success', 'El registro se ha actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function changeStatus(Request $request, $expendiente)
    {
        $data = Expendiente::find($expendiente);
        if ($request->estado == 'Terminado') {
            $data->update(['fecha_fin' => date('Y-m-d'), 'estado' => $request->estado]);
        }else {
            $data->update(['estado' => $request->estado]);
        }


        return redirect()->route('expediente.index')->with('success', 'El estatus ha sido actualizado exitosamente.');
    }
}
