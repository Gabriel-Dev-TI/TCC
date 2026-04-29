<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.escolha');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () { 
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::prefix('entregador')->group(function () {
    
   
    Route::get('/dashboard', function () {
        return view('entregador.dashboard');
    })->name('entregador.dashboard');

    Route::get('/historico', function () {
        return view('entregador.historico');
    })->name('entregador.historico');
});


Route::prefix('empresa')->group(function () {

    Route::get('/dashboard', function () {
        return view('empresa.dashboard');
    })->name('empresa.dashboard');

    Route::get('/historico', function () {
        return view('empresa.historico');
    })->name('empresa.historico');

    Route::get('/detalhe/{id}', function ($id) {
        return view('empresa.detalhe', compact('id'));
    })->name('empresa.detalhe');

    Route::get('/criar', function () {
        return view('empresa.criar');
    })->name('empresa.criar');
});