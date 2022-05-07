<?php

namespace App\Http\Controllers;

use App\Models\CandidateApplication;
use App\Models\Vacancies;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function addApplication(Request $request)
    {
        $validated = $request->validate(
            [
                'vacancy_id' => 'required|integer',
                'candidate_id' => 'required|integer',
            ],
        );

        $application = CandidateApplication::where('vacancy_id', $validated['vacancy_id'])
                            ->where('candidate_id', $validated['candidate_id'])->get();
        if($application->isEmpty()) {
            $candidateApplication = CandidateApplication::create([
                'vacancy_id' => $validated['vacancy_id'],
                'candidate_id' => $validated['candidate_id']
            ]);
            return response()->json(['candidateApplication' => $candidateApplication], 200);
        } else {
            return response()->json(['application' => 'Кандидат уже откликался на эту вакансию'], 403);
        }
    }

    public function applications($candidate_id)
    {
        return response()->json(['candidateApplications' =>  CandidateApplication::where('candidate_id', $candidate_id)->with('vacancy')->get()]);
    }
}
