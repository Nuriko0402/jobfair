<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancies extends Model
{
    use HasFactory;

    // График работы
    const FULL = 'full'; // Полная занятость
    const PART = 'part'; // Частичная занятость
    const PROBATION = 'probation'; // Стажировка
    const PROJECT = 'project'; // Проектная работа
    const VOLUNTEER = 'volunteer'; // Волонтерство

    public static $schedules = array(
        'full', 'part' ,'probation', 'project', 'volunteer'
    );
}
