<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Billing extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'total',
        'payment_type',
        'status',
        'number_installments',
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }
    public function invoice_details(): HasMany
    {
        return $this->hasMany(InvoiceDetail::class, 'billing_id', 'id');
    }
    public function payments(): HasMany
    {
        return $this->hasMany(PayInvoice::class, 'billing_id', 'id');
    }
}
