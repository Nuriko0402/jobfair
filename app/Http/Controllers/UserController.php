<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use App\Http\Requests\CompanyRegistrationRequest;
use App\Models\User;
use App\Models\Company;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function companyRegsitration(CompanyRegistrationRequest $request)
    {
        $validated = $request->validated();
        try {
            $user = User::create([
                'name' => $validated['title'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);
            $company = Company::create([
                'title' => $validated['title'],
                'address' => $validated['address'],
                'bin' => $validated['bin'],
                'iik' => $validated['iik'],
                'kbe' => $validated['kbe'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'user_id' => $user->id,
            ]);
        } catch (QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            print_r($errorInfo);
        }
    }
}
