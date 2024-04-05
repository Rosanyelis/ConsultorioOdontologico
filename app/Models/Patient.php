<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'firstname',
        'second_name',
        'lastname',
        'second_surname',
        'phone',
        'whatsapp',
        'birthdate',
        'age',
        'civil_status',
        'sex',
        'occupation',
        'last_visit_date',
    ];


    /** Relaciones eloquent */

    /** Relacion de pacientes con citas */
    /**
     * Relacion de doctor y citas
     */
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'pacient_id', 'id');
    }

    /**
     * Salud Actual del paciente.
     */
    public function patient_health(): HasOne
    {
        return $this->hasOne(PatientHealth::class, 'patient_id', 'id');
    }

    /**
     * Examen Intra Oral del paciente.
     */
    public function intraoral_exam(): HasOne
    {
        return $this->hasOne(IntraoralExam::class, 'patient_id', 'id');
    }

    /**
     * Examen Intra Oral del paciente.
     */
    public function treatment_plan(): HasOne
    {
        return $this->hasOne(TreatmentPlan::class, 'patient_id', 'id');
    }

    /**
     * Historia Dentl del paciente.
     */
    public function dental_history(): HasMany
    {
        return $this->hasMany(DentalHistory::class, 'patient_id', 'id');
    }

    /**
     * Recetas del paciente.
     */
    public function recipes(): HasMany
    {
        return $this->hasMany(Recipe::class, 'patient_id', 'id');
    }

    /**
     * Facturas del paciente.
     */
    public function billings(): HasMany
    {
        return $this->hasMany(Billing::class, 'patient_id', 'id');
    }

    /**
     * Facturas del paciente.
     */
    public function notes(): HasMany
    {
        return $this->hasMany(Note::class, 'patient_id', 'id');
    }
}
