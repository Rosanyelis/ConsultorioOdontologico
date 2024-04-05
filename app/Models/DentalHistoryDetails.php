<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DentalHistoryDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'dental_history_id',
        'teeths_id',
        'treatment',
    ];

    public function dental_history(): BelongsTo
    {
        return $this->belongsTo(DentalHistory::class, 'dental_history_id', 'id');
    }
}
