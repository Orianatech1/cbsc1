<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicAchievementsController extends Controller
{
    public function index(){
        return view('pages.academics.academic-achievements');
    }
}

