<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'anemia',
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

    /** Relaciones */
    /**
     * obtiene la informacion del paciente.
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

}
