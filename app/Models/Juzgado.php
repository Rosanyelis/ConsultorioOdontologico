<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juzgado extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Expedientes()
    {
        return $this->hasMany(Expendiente::class, 'juzgados_id', 'id');
    }
}
