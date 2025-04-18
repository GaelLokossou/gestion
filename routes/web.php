<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('accueil');

Route::get('/dashboard', function () {
    return view('layout.dashboard');
})->name('dashboard');
