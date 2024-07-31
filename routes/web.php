<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/facilities', function () {
    return view('pages.facilities');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/admission-enquiry', function () {
    return view('pages.admissions.admission-enquiry');
});

Route::get('/curriculam-details', function () {
    return view('pages.academics.curriculam-details');
});

Route::get('/mandatorypublicdisclosure', function () {
    return view('pages.mandatorypublicdisclosure');
});

Route::get('/academic-achievements', function () {
    return view('pages.academics.academic-achievements');
});

Route::get('/academic-calender', function () {
    return view('pages.academics.academic-calender');
});

Route::get('/holiday-list', function () {
    return view('pages.academics.holiday-list');
});

Route::get('/school-best-practice', function () {
    return view('pages.academics.school-best-practice');
});

Route::get('/admission-procedure-age-criteria', function () {
    return view('pages.admissions.admission-procedure-age-criteria');
});

Route::get('/document-checklist', function () {
    return view('pages.admissions.document-checklist');
});

Route::get('/fee-details', function () {
    return view('pages.admissions.fee-details');
});