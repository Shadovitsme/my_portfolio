<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/skills', function () {
    return view('skills');
});
Route::get('/admin', function () {
    return view('adminPage');
});