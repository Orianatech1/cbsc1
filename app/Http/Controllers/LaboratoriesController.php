<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaboratoriesController extends Controller
{
    public function index(){
        return view('pages.facilities.laboratories');
    }
}
