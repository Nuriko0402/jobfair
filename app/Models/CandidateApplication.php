<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateApplication extends Model
{
    use HasFactory;

    protected $table = 'candidate_applications';
    protected $fillable = [
        'status',
        'vacancy_id',
        'candidate_id'
    ];

    // Статус отклика
    const PENDING = 0; // На рассмотрении
    const DENIED = 1; // Отказано
    const INTERVIEW = 2; // собеседование
    const ACCEPTED = 3; // собеседование

    public function vacancy()
    {
        return $this->belongsTo(Vacancies::class, 'vacancy_id');
    }
}
