<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionEnquiryController extends Controller
{
    public function index(){
        return view('pages.admissions.admission-enquiry');
    }
}
