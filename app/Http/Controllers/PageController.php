<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class PageController extends Controller
{
    public function enterPage() {
        $page = 'enter';
        return view('page', compact('page'));
    }
    public function companyviewPage() {
        $page = 'companyview';
        return view('page', compact('page'));
    }
    public function vacancyresponsePage() {
        $page = 'vacancyresponse';
        return view('page', compact('page'));
    }
    public function studentaccountPage() {
        $page = 'studentaccount';
        return view('page', compact('page'));
    }
    public function companyvacancyPage() {
        $page = 'companyvacancy';
        return view('page', compact('page'));
    }
    public function categoryvacancyPage() {
        $page = 'categoryvacancy';
        return view('page', compact('page'));
    }
    public function vacancyviewPage() {
        $page = 'vacancyview';
        return view('page', compact('page'));
    }
    public function vacancyeditPage() {
        $page = 'vacancyedit';
        return view('page', compact('page'));
    }
    public function companyinformationPage() {
        $page = 'companyinformation';
        return view('page', compact('page'));
    }
    public function studentinformationPage() {
        $page = 'studentinformation';
        return view('page', compact('page'));
    }
    public function studentfeedbackPage() {
        $page = 'studentfeedback';
        return view('page', compact('page'));
    }
    
}