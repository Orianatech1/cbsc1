<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about.about');
});

Route::get('/aboutourteam', function () {
    return view('pages.about.aboutourteam');
});

Route::get('/gallery', function () {
    return view('pages.gallery.gallery');
});

Route::get('/assessment', function () {
    return view('pages.facilities.assessment');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/admission-enquiry', function () {
    return view('pages.admissions.admission-enquiry');
});


Route::get('/document-checklist', function () {
    return view('pages.admissions.document-checklist');
});

Route::get('/fee-details', function () {
    return view('pages.admissions.fee-details');
});

Route::get('/admission-procedure-age-criteria', function () {
    return view('pages.admissions.admission-procedure-age-criteria');
});

Route::get('/academics', function () {
    return view('pages.academics');
});

Route::get('/mandatorypublicdisclosure', function () {
    return view('pages.mandatorypublicdisclosure');
});

Route::get('/aboutourorg', function () {
    return view('pages.about.aboutourorg');
});

Route::get('/vissionmission', function () {
    return view('pages.about.vissionmission');
});

Route::get('/stafflist', function () {
    return view('pages.about.stafflist');
});

Route::get('/ourschool', function () {
    return view('pages.about.ourschool');
});

Route::get('/pmessage', function () {
    return view('pages.about.pmessage');
});

Route::get('/manpubdisclosure', function () {
    return view('pages.about.manpubdisclosure');
});

Route::get('/managingcommittee', function () {
    return view('pages.about.managingcommittee');
});

Route::get('/affiliation', function () {
    return view('pages.about.affiliation');
});

Route::get('/laboratories', function () {
    return view('pages.facilities.laboratories');
});

Route::get('/schoolfacilities', function () {
    return view('pages.facilities.schoolfacilities');
});
