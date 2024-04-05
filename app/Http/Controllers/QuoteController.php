<?php

namespace App\Http\Controllers;

use App\Models\Quote;
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
        $type = TypeOfTreatments::all();
        return view('quotes.index', compact('type'));
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
        //
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
