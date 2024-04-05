<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->rol->name == 'Doctor')
        {
            $doctorId = Auth::user()->id;
            $totalPatient = Patient::where('doctor_id', '=', $doctorId)->count();
            $billingPend = Billing::with(['paciente' => function ($query) use ($doctorId) {
                                $query->where('doctor_id', $doctorId);
                            }])
                            ->where('status', 'Pendiente')
                            ->sum('total');
            $billingCan = Billing::with(['paciente' => function ($query) use ($doctorId) {
                                $query->where('doctor_id', $doctorId);
                            }])
                            ->where('status', 'Cancelado')
                            ->sum('total');
            $billingCom = Billing::with(['paciente' => function ($query) use ($doctorId) {
                                $query->where('doctor_id', $doctorId);
                            }])
                            ->where('status', 'Pagado')
                            ->sum('total');
        }else{
            $totalPatient = Patient::count();
            $billingPend = Billing::where('status', 'Pendiente')->sum('total');
            $billingCan = Billing::where('status', 'Cancelado')->sum('total');
            $billingCom = Billing::where('status', 'Pagado')->sum('total');
        }


        return view('dashboard', compact('totalPatient', 'billingPend', 'billingCan', 'billingCom'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
