<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancies;

class VacancyController extends Controller
{
    public function index(Request $request)
    {
        if ($request->schedule == null) {
            $vacancies = Vacancies::all();
        } else {
            $vacancies = Vacancies::where('schedule', $request->schedule)->get();
        }
        return response()->json(['vacancies' => $vacancies]); 
    }
}
