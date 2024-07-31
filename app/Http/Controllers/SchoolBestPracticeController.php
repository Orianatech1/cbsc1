<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolBestPracticeController extends Controller
{
    public function index(){
        return view('pages.academics.school-best-practice');
    }
}
