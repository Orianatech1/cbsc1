<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pages.about');
});

Route::get('/', function () {
    return view('pages.gallery');
});

Route::get('/', function () {
    return view('pages.facilities');
});

Route::get('/', function () {
    return view('pages.contact');
});

Route::get('/', function () {
    return view('pages.admissions');
});

Route::get('/', function () {
    return view('pages.academics');
});

Route::get('/', function () {
    return view('pages.mandatorypublicdisclosure');
});

