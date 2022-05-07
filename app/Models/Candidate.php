<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $table = 'candidate';
    protected $fillable = [
        'lastname',
        'firstname',
        'iin',
        'gpa',
        'phone',
        'email',
        'about_text',
        'university',
        'education_type',
        'salary',
        'experience',
        'schedule',
        'employment_type',
        'user_id'
    ];
}
