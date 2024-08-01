<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PmessageController extends Controller
{
    public function index(){
        return view('pages.about.pmessage');
    }
}
