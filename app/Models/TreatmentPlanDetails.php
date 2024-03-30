<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TreatmentPlanDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'treatment_plan_id',
        'teeths_id',
        'treatment'
    ];


    public function treatment_plan(): BelongsTo
    {
        return $this->belongsTo(TreatmentPlan::class, 'treatment_plan_id', 'id');
    }

    public function teeth(): BelongsTo
    {
        return $this->belongsTo(Teeth::class, 'teeths_id', 'id');
    }
}
