<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Auth::routes();

Route::get('/', function () {
    return view('main');
});

Route::get('/enter-view', [PageController::class, 'enterPage']);
Route::get('/company-view', [PageController::class, 'companyviewPage']);
Route::get('/vacancy-response', [PageController::class, 'vacancyresponsePage']);
Route::get('/student-account', [PageController::class, 'studentaccountPage']);
Route::get('/company-vacancy', [PageController::class, 'companyvacancyPage']);
Route::get('/category-vacancy', [PageController::class, 'categoryvacancyPage']);
Route::get('/vacancy-view', [PageController::class, 'vacancyviewPage']);
Route::get('/vacancy-edit', [PageController::class, 'vacancyeditPage']);
Route::get('/company-information', [PageController::class, 'companyinformationnPage']);
Route::get('/student-information', [PageController::class, 'studentinformationPage']);




Route::get('/company-vacancy/{id}',[PageController::class, 'companyvacancyPage']);
Route::get('/student-account/{id}',[PageController::class, 'student-accountPage']);
