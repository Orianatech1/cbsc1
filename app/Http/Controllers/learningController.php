<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class learningController extends Controller
{
    public function index(){
        return view('pages.academics.learning');
    }
}
