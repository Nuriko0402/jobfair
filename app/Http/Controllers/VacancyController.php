<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancies;

class VacancyController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate(
            [
                'salary' => 'integer',
            ],
            [
                'salary.integer' => 'Зарплата должна быть цифрой'
            ]
        );
        $vacancies = Vacancies::orderBy('id');
        if ($request->schedule != null) { $vacancies->where('schedule', $request->schedule); }
        if ($request->type != null) { $vacancies->where('employment_type', $request->type); }
        if ($request->salary != null) { $vacancies->where('salary', '>=', $request->salary); }
        if ($request->experience != null) { $vacancies->where('experience', $request->experience); }

        return response()->json(['vacancies' => $vacancies->get()]); 
    }

    public function show($id)
    {
        return response()->json(['vacancy' =>  Vacancies::where('id', $id)->get()]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'salary' => 'integer',
            ],
            [
                'salary.integer' => 'Зарплата должна быть цифрой'
            ]
        );
        $vacancy = new Vacancies;
    }
}
