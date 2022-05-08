<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancies extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'experience',
        'schedule',
        'employment_type',
        'description',
        'company_id',
        'salary',
        'status',
    ];

    // Тип занятости
    const FULL = 'full'; // Полная занятость
    const PART = 'part'; // Частичная занятость
    const PROBATION = 'probation'; // Стажировка
    const PROJECT = 'project'; // Проектная работа
    const VOLUNTEER = 'volunteer'; // Волонтерство
    public static $employmentTypes = array(
        'full', 'part' ,'probation', 'project', 'volunteer'
    );

    // График работы
    const FULLDAY = 'fullDay'; // Полный день
    const SHIFT = 'shift'; // Сменный график
    const FLYINFLYOUT = 'flyInFlyOut'; // Вахтовый метод
    const REMOTE = 'remote'; // Удаленная работа
    const FLEXIBLE = 'flexible'; // Гибкий график
    public static $schedules = array(
        'full', 'part' ,'probation', 'project', 'volunteer'
    );

    // Опыт работы
    const BETWEEN1AND3 = 'between1And3'; // От 1 года до 3 лет
    const NOEXPERIENCE = 'noExperience'; // Нет опыта
    const BETWEEN3AND6 = 'between3And6'; // От 3 до 6 лет
    const MORETHAN6 = 'moreThan6'; // Больше чем 6 лет
}
