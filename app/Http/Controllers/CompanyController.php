<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function submit(Request $req) {
       $validation = $req-> validate([
           'subject' => 'required|main:5|max:50'
       ]);
    }
}
