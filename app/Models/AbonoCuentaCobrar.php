<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbonoCuentaCobrar extends Model
{
    use HasFactory;

    protected $guarded  = [];

    public function cuentaCobrar()
    {
        return $this->belongsTo(CuentaCobrar::class, 'cuenta_cobrars_id', 'id');
    }
}
