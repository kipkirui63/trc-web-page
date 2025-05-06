<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/visit', function () {
    return view('visit');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/donate', function () {
    return view('donate');
});