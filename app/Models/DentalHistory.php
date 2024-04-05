<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DentalHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'reason_consultation',
        'observations',
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }
    public function dental_history_details(): HasMany
    {
        return $this->hasMany(DentalHistoryDetails::class, 'dental_history_id', 'id');
    }
}
