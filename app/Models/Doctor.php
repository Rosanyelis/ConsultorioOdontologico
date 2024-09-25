<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'dni',
        'phone',
    ];

    /** Relaciones ELoquent */

    /**Relacion de doctor con user */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Relacion de doctor y citas
     */
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'doctor_id', 'id');
    }

    /**
     * Relacion de doctor y citas
     */
    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class, 'doctor_id', 'id');
    }
}
