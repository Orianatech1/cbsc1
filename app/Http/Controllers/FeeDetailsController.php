<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeDetailsController extends Controller
{
    public function index(){
        return view('pages.admissions.fee-details');
    }
}
