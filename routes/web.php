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

Route::get('/about', function () {
    return view('about');
});
Route::get('/children', function () {
    return view('children');
});
Route::get('/youth', function () {
    return view('youth');
});
Route::get('/women', function () {
    return view('women');
});
Route::get('/men', function () {
    return view('men');
});
Route::get('/ministries', function () {
    return view('ministries');
});