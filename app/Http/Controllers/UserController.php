<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompanyRegistrationRequest;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function companyRegsitration(CompanyRegistrationRequest $request)
    {
        $validated = $request->validated();
        dd($validated['email']);
        return 'test';
    }
}
