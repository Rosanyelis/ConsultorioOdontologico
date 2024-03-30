<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IntraoralExam extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'cheeks',
        'mucous_membranes',
        'gums',
        'language',
        'palate',
        'torus',
        'aftas',
        'supragingival_tartar',
        'subgingival',
        'plate',
        'crowding',
        'observations'
    ];

    /** Relaciones */
    /**
     * obtiene la informacion del paciente.
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }


    public function intraoralExamDetails(): HasMany
    {
        return $this->hasMany(IntraoralExaminationTeeth::class, 'intraoral_exams_id', 'id');
    }


}
