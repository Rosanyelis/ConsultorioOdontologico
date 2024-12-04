<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Patient;
use App\Models\QuoteItem;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\TypeOfTreatments;
use App\Http\Requests\QuoteStoreRequest;


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
     * Store a newly created resource in storage.
     */
    public function store(QuoteStoreRequest $request)
    {

        $dato = Quote::create([
            'dni' => $request->dni,
            'firstname'         => $request->firstname,
            'lastname'          => $request->lastname,
            'second_surname'    => $request->second_surname,
            'phone'             => $request->phone,
            'email'             => $request->email,
            'valid_end'         => $request->valid_end,
            'observations'      => $request->observations,
            'total'             => $request->total,
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
     * Show the form for creating a new resource.
     */
    public function pdf($id)
    {
        $quote = Quote::find($id);

        $pdf = Pdf::loadView('quotes.quote', compact('quote'));
        return $pdf->stream();
    }

    /**
     * Display the specified resource.
     */
    public function send_correo($id)
    {
        $quote = Quote::find($id);

        $pdf = Pdf::loadView('quotes.quote', compact('quote'))
        ->setPaper('letter', 'portrait')
        ->setWarnings(false)
        ->save(storage_path('app/public/quotes/quote-'.$quote->id.'.pdf'));

        $url = asset('storage/quotes/quote-'.$quote->id.'.pdf');

        $data = [
            'subject' => 'Cotización',
            'body' => 'Cotización',
            'url' => $url,
            'email' => $quote->email,
        ];

        \Mail::send('emails.quote', $data, function ($message) use ($data) {
            $message->to($data['email'], 'Cotización');
            $message->subject($data['subject']);
            $message->attach($data['url']);
        });


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
