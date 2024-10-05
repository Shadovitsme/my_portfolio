<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/about', function () {
    return view('about');
});
