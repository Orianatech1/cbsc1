<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffiliationController extends Controller
{
    public function index(){
        return view('pages.about.affiliation');
    }
}
