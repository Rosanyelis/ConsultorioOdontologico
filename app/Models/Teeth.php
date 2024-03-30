<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teeth extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'code',
    ];

    public function intraoral_exam_details(): HasMany
    {
        return $this->hasMany(IntraoralExaminationTeeth::class, 'teeths_id', 'id');
    }
}
