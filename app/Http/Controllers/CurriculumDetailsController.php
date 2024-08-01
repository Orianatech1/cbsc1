<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculumDetailsController extends Controller
{
    public function index(){
        return view('pages.academics.curriculam-details');
    }
}
