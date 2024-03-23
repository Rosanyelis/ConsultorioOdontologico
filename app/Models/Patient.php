<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
