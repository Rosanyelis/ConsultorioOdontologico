<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function expedientes()
    {
        return $this->hasMany(Expendiente::class, 'clientes_id', 'id');
    }

    public function cuentasCobrar()
    {
        return $this->hasMany(CuentaCobrar::class, 'clientes_id', 'id');
    }

    public function MediosContacto()
    {
        return $this->belongsTo(MedioContacto::class, 'medio_contactos_id', 'id');
    }

}
