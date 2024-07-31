<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentChecklistController extends Controller
{
    public function index(){
        return view('pages.admissions.document-checklist');
    }
}
