<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolidayListController extends Controller
{
    public function index(){
        return view('pages.academics.holiday-list');
    }
}
