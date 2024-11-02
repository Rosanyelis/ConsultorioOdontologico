<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaCobrar extends Model
{
    use HasFactory;

    protected $guarded  = [];

    public function expediente()
    {
        return $this->belongsTo(Expendiente::class, 'expendientes_id', 'id');
    }

    public function pagos()
    {
        return $this->hasMany(AbonoCuentaCobrar::class, 'cuenta_cobrars_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'clientes_id', 'id');
    }
}
