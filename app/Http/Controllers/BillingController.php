<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Patient;
use App\Models\PayInvoice;
use Illuminate\Http\Request;
use App\Models\InvoiceDetail;
use App\Models\TypeOfTreatments;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePayInvoice;

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
                                $query->where('doctor_id', $doctorId);
                            }])
                            ->whereHas('patient', function ($query) use ($doctorId) {
                                $query->where('doctor_id', '=', $doctorId);
                            })
                            ->get();
            $patients = Patient::where('doctor_id', $doctorId)->get();
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
    public function show(string $id)
    {
        $data = Billing::find($id);
        return view('payments.show', compact('data'));
    }

    public function pay(string $id)
    {
        $data = Billing::find($id);
        return view('payments.abonar', compact('data'));
    }

    public function store_pay(StorePayInvoice $request, $id)
    {
        $data = Billing::find($id);
        if ($data->total == $request->pay_amount) {
            $data->status = 'Pagado';
        }
        if ($data->total > $request->pay_amount) {
            $data->status = 'Pendiente';
        }
        if ($data->total < $request->pay_amount) {
            return redirect()->back()->with('error', 'El monto de abono es mayor al monto de la Factura, por favor verifique.');
        }
        $data->save();

        $data = $request->all();
        $data['billing_id'] = $id;
        PayInvoice::create($data);
        return redirect()->route('billing.index')->with('success', 'La Factura fue abonada exitosamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Billing $billing)
    {
        //
    }
}
