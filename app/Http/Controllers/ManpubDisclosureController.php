<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManpubDisclosureController extends Controller
{
    public function index(){
        return view('pages.about.mandatorypublicdisclosure');
    }
}
