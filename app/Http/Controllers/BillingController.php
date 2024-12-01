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

        $data = Billing::with('patient')->get();
        $patients = Patient::all();
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
            'total'                 => $request->total,
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
        $billing = Billing::findOrFail($id); // Garantiza que la factura existe o lanza un error
        $total_abonos = $billing->payments->sum('pay_amount');
        $saldo_pendiente = $billing->total - $total_abonos;

        // Validar si el monto del abono excede el saldo pendiente
        if ($request->pay_amount > $saldo_pendiente) {
            return redirect()->back()->with('error', 'El monto de abono excede el saldo pendiente de la Factura.');
        }

        // Actualizar estado de la factura
        $nuevo_total_abonado = $total_abonos + $request->pay_amount;

        if ($nuevo_total_abonado == $billing->total) {
            $billing->status = 'Pagado';
        } else {
            $billing->status = 'Pendiente';
        }

        $billing->save();

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
