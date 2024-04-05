<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\InvoiceDetail;
use App\Models\TypeOfTreatments;
use Illuminate\Support\Facades\Auth;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->rol->name == 'Doctor')
        {
            $doctorId = Auth::user()->id;
            $data = Billing::with(['patient' => function($query) use ($doctorId) {
                $query->where('doctor_id', $doctorId->id);
              }])->get();
            $patients = Patient::where('doctor_id', $doctorId->id)->get();
        }else{
            $data = Billing::with('patient')->get();
            $patients = Patient::all();
        }
        $type = TypeOfTreatments::all();
        return view('payments.index', compact('data', 'patients', 'type'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $exam = Billing::create([
            'patient_id'            => $request->patient_id,
            'total'                 => number_format($request->total, 2, ".", ","),
            'payment_type'          => $request->payment_type,
            'status'                => $request->status,
            'number_installments'   => $request->number_installments,
        ]);

        $data = json_decode($request->billing);

        foreach($data as $item){
            InvoiceDetail::create([
                'billing_id'     => $exam->id,
                'treatment'      => $item->type,
                'price'          => $item->price,
            ]);
        }

        return redirect()->back()->with('success', 'La Factura fue registrada exitósamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Billing $billing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Billing $billing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Billing $billing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Billing $billing)
    {
        //
    }
}
