<?php

namespace App\Http\Controllers;

use App\Http\Requests\VacancyCreateRequest;
use Illuminate\Http\Request;
use App\Models\Vacancies;

class VacancyController extends Controller
{


//    public function __construct()
//    {
//        $this->middleware('guest');
//    }
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
                'title' => 'required|string|max:255',
                'experience' => ['required', 'string', 'max:255'],
                'schedule' => ['required', 'string', 'max:255'],
                'salary' => ['required', 'integer', 'digits_between: 0,8'],
                'employment_type' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string'],
                'company_id' => ['required', 'integer'],
            ],
            [
                'title.required' => 'Обязательно к заполнению',
                'experience.required' => 'Обязательно к заполнению',
                'schedule.required' => 'Обязательно к заполнению',
                'salary.required' => 'Обязательно к заполнению',
                'employment_type.required' => 'Обязательно к заполнению',
                'description.required' => 'Обязательно к заполнению',
                'company_id.required' => 'Обязательно к заполнению',
            ]
        );

        $vacancy = Vacancies::create($request->all());
        return response()->json($vacancy, 201);
    }

    public function update(Request $request, Vacancies $vacancy)
    {
        $validated = $request->validate(
            [
                'title' => 'string|max:255',
                'experience' => ['string', 'max:255'],
                'schedule' => ['string', 'max:255'],
                'salary' => ['integer', 'digits_between: 0,8'],
                'employment_type' => ['string', 'max:255'],
                'description' => ['string'],
            ],
        );
        if ($request->has('company_id')) {
            $request->merge(['company_id' => $vacancy->company_id]);
        }
        $vacancy->update($request->all());

        return response()->json($vacancy, 200);
    }
}
