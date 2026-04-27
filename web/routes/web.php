<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.dashboard'); 
});

Route::get('/entregas', function () {
    return view('layouts.entregas');
});