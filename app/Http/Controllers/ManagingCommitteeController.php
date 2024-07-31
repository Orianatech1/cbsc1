<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagingCommitteeController extends Controller
{
    public function index(){
        return view('pages.about.managingcommittee');
    }
}
