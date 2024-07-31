<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicCalenderController extends Controller
{
    public function index(){
        return view('pages.academics.academic-calender');
    }
}
