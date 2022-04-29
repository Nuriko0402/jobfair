<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::get('/vacancy-show/{vacancy_id}', [VacancyController::class, 'show'])->name('vacancy.show');

Route::get('/vacancies', [VacancyController::class, 'index'])->name('vacancy.all');
Route::get('/vacancies/{id}', [VacancyController::class, 'show'])->name('vacancy.show');
Route::post('/vacancies', [VacancyController::class, 'store'])->name('vacancy.store');
Route::put('/vacancies/{id}', [VacancyController::class, 'update'])->name('vacancy.update');
Route::delete('/vacancies/{id}', [VacancyController::class, 'delete'])->name('vacancy.delete');

Route::get('/categories', [CategoryController::class, 'index'])->name('category.all');
Route::post('/company-registration', [UserController::class, 'companyRegsitration'])->name('company.register');
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::middleware('auth:sanctum')->post('/logout', [UserController::class, 'logout']);


Route::middleware('auth:sanctum')->get('/usersasd', function (Request $request) {
    return response()->json(['name' => $request->user()->name]);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Auth::routes();