<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedioContacto extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Expedientes()
    {
        return $this->hasMany(Expendiente::class, 'juzgados_id', 'id');
    }

    public function Clientes()
    {
        return $this->hasMany(Cliente::class, 'medio_contactos_id', 'id');
    }
}
