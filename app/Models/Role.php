<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    /** Relaciones Eloquent */

    /** Relacion de role con usuario */
    public function user(): HasOne
    {
        return $this->hasOne(App\Models\User::class, 'rol_id', 'id');
    }
}
