<?php

use App\Http\Controllers\MainDataBaseAction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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

Route::controller(MainDataBaseAction::class)->group(function () {
    Route::get('/api', 'addSkill');
    Route::get('/apiProject', 'addProject');
    Route::get('/apiPhoto', 'addPhoto');
    Route::get('/apiShowDb', 'returnDbShow');
    Route::get('/apiSearchSkills', 'skillSearch');

});