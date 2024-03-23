<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientHealth extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'has_disease',
        'disease',
        'medical_treatment',
        'treatment_text',
        'allergies',
        'epilepsy',
        'hepatitis',
        'hypertension',
        'vih',
        'hypotension',
        'tuberculosis',
        'heart_disease',
        'have_diabetes',
        'type_diabete',
        'pregnant',
        'drugs',
        'alcohol',
        'tobacco',
        'asthma',
        'asthma_text',
        'ets',
        'ets_text',
        'harmful_habits',
    ];

}
