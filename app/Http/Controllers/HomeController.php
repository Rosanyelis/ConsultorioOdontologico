<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Cliente;
use App\Models\Patient;
use App\Models\Expendiente;
use App\Models\CuentaCobrar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::count();
        $expedientesActivos = Expendiente::where('estado', 'Activo')->count();
        $expedientesTerminados = Expendiente::where('estado', 'Terminado')->count();
        $cuentasCobrar = CuentaCobrar::count();
        return view('dashboard', compact('clientes', 'expedientesActivos', 'expedientesTerminados', 'cuentasCobrar'));
    }


}
