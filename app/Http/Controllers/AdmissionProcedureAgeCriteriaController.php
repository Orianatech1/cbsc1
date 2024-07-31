<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionProcedureAgeCriteriaController extends Controller
{
    public function index(){
        return view('pages.admissions.admission-procedure-age-criteria');
    }
}
