<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function expediente()
    {
        return $this->belongsTo(Expendiente::class, 'expendientes_id', 'id');
    }
}
