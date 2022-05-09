<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

// Auth::routes();

Route::get('/', function () {
    return view('main');
});
Route::middleware('auth:sanctum')->get('/name', function (Request $request) {
    return 'test';
});
Route::get('/enter-view', [PageController::class, 'enterPage']);
Route::get('/company-view', [PageController::class, 'companyviewPage']);
Route::get('/vacancy-response', [PageController::class, 'vacancyresponsePage']);
Route::get('/company-response', [PageController::class, 'companyresponsePage']);
Route::get('/student-feedback', [PageController::class, 'studentfeedbackPage']);
Route::get('/company-feedback', [PageController::class, 'companyfeedbackPage']);
Route::get('/student-account', [PageController::class, 'studentaccountPage']);
Route::get('/company-vacancy', [PageController::class, 'companyvacancyPage']);
Route::get('/category-vacancy', [PageController::class, 'categoryvacancyPage']);
Route::get('/vacancy-view', [PageController::class, 'vacancyviewPage']);
Route::get('/vacancy-edit', [PageController::class, 'vacancyeditPage']);
Route::get('/company-information', [PageController::class, 'companyinformationnPage']);
Route::get('/student-information', [PageController::class, 'studentinformationPage']);
// Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/login', [PageController::class, 'enterPage'])->name('login');



Route::get('/company-vacancy/{id}',[PageController::class, 'companyvacancyPage']);
Route::get('/student-account/{id}',[PageController::class, 'student-accountPage']);


Route::group(['prefix' => 'admin'], function () {
    //Voyager::routes();
});
