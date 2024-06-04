<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayInvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'billing_id',
        'pay_amount',
        'pay_method',
        'pay_number_reference',
    ];

    public function billing(): BelongsTo
    {
        return $this->belongsTo(Billing::class, 'billing_id', 'id');
    }

}
