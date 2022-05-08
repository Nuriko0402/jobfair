<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CompanyRegistrationRequest;
use App\Models\User;
use App\Models\Company;
use App\Models\Candidate;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            // $request->session()->regenerate();
            /*$user = Auth::user(); */
            $success['token'] =  $user->createToken('auth.jobfair')->plainTextToken;
            $success['name'] =  $user->name;

            /*$page = 'companyview';
            return view('page', compact('page', 'user')); */

            return response()->json(['message' => 'Вы успешно авторизовались', 'success' => $success]);
        }
        else{
            return response()->json(['message' => 'Логин или пароль неправильный'], 401);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        dd($request->user());
        return response()->json([
            'message' => 'Вы вышли из системы'
        ], 200);
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
                'description' => 'test',
            ]);

            return response()->json(['message' => 'Вы успешно зарегистрировались']);
        } catch (QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            return response()->json(['message' => $errorInfo]);
        }
    }

    public function candidateRegistration(Request $request)
    {
        $validated = $request->validate(
            [
                'lastname' => 'string|max:255',
                'firstname' => ['string', 'max:255'],
                'iin' => ['string', 'max:12'],
                'gpa' => ['string', 'max:12'],
                'phone' => ['string', 'max:255'],
                'email' => ['string', 'unique:users', 'max:255'],
                'password' => 'required|confirmed',
            ],
        );
        try {
            $user = User::create([
                'name' => $validated['lastname'] . ' ' . $validated['firstname'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);

            $candidate = Candidate::create([
                'lastname' => $validated['lastname'],
                'firstname' => $validated['firstname'],
                'iin' => $validated['iin'],
                'gpa' => $validated['gpa'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'user_id' => $user->id,
            ]);

            return response()->json(['message' => 'Вы успешно зарегистрировались']);
        } catch (QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            return response()->json(['message' => $errorInfo]);
        }
    }
}
