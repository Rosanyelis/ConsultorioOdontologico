<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expendiente extends Model
{
    use HasFactory;

    protected $guarded  = [];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'clientes_id', 'id');
    }

    public function juzgado()
    {
        return $this->belongsTo(Juzgado::class, 'juzgados_id', 'id');
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class, 'materias_id', 'id');
    }

    public function cuentaCobrar()
    {
        return $this->hasOne(CuentaCobrar::class, 'expendientes_id', 'id');
    }

    public function notas()
    {
        return $this->hasMany(Nota::class, 'expendientes_id', 'id');
    }

    public function archivos()
    {
        return $this->hasMany(Archivo::class, 'expendientes_id', 'id');
    }
}
