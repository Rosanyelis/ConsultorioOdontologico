<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Patient;
use App\Models\QuoteItem;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\TypeOfTreatments;


class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Quote::all();
        return view('quotes.index', compact('data'));
    }

    public function create()
    {
        $patients = Patient::all();
        $type = TypeOfTreatments::all();
        return view('quotes.create', compact('type', 'patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pdf(Request $request)
    {
        $data = json_decode($request->data);
        $quote = $data[0];
        $patient = [
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'mcd' => $request->mcd,
            'date' => $request->date,
            'datevalid' => $request->dateValid,
        ];

        $pdf = Pdf::loadView('quotes.quote', compact('quote', 'patient'));
        return $pdf->stream();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $dato = Quote::create([
            'patient_id' => $request->patient_id,
            'valid_end' => $request->valid_end,
            'observations' => $request->observations,
            'total' => $request->total,
        ]);

        $servicios = json_decode($request->services);

        foreach($servicios as $item){
            $t = TypeOfTreatments::where('name', $item->type)->first();
            QuoteItem::create([
                'quote_id' => $dato->id,
                'type_of_treatment_id' => $t->id,
                'treatment' => $item->type,
                'price_unit' => $item->price,
                'quantity_teeths' => $item->qty,
                'subtotal' => $item->subtotal,
            ]);
        }

        return redirect()->route('quote.index')->with('success', 'La Cotización fue registrada exitósamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Quote $quote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quote $quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quote $quote)
    {
        //
    }
}
