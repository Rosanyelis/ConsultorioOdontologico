<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TreatmentPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'other_treatments',
    ];

    public function TreatmentPlanDetails(): HasMany
    {
        return $this->hasMany(TreatmentPlanDetails::class, 'treatment_plan_id', 'id');
    }
}
