<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function index(){
        return view('pages.facilities.assessment');
    }
}
