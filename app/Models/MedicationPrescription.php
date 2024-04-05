<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicationPrescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_id',
        'medicine',
        'dose',
        'instructions',
    ];

    public function medicationprescription(): BelongsTo
    {
        return $this->belongsTo(Recipe::class, 'recipe_id', 'id');
    }


}
