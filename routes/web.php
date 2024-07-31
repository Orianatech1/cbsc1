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

Route::get('/admissions', function () {
    return view('pages.admissions');
});

Route::get('/academics', function () {
    return view('pages.academics');
});

Route::get('/mandatorypublicdisclosure', function () {
    return view('pages.mandatorypublicdisclosure');
});

