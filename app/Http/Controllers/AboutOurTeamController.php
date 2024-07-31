<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutOurTeamController extends Controller
{
    public function index(){
        return view('pages.about.aboutourteam');
    }
}
