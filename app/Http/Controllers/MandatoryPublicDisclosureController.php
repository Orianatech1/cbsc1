<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MandatoryPublicDisclosureController extends Controller
{
    public function index(){
        return view('pages.mandatorypublicdisclosure');
    }
}