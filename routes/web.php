<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/packages', function () {
    return view('package');
});

Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faqs', function () {
    return view('faqs');
});
