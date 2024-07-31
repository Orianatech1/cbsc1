<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolFacilitiesController extends Controller
{
    public function index(){
        return view('pages.facilities.schoolfacilities');
    }
}
