<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IntraoralExaminationTeeth extends Model
{
    use HasFactory;

    protected $fillable = [
        'intraoral_exams_id',
        'teeths_id',
        'treatment'
    ];


    public function intraoral_exam(): BelongsTo
    {
        return $this->belongsTo(IntraoralExam::class, 'intraoral_exams_id', 'id');
    }

    public function teeth(): BelongsTo
    {
        return $this->belongsTo(Teeth::class, 'teeths_id', 'id');
    }
}
