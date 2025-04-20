<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('accueil');

Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->name('auth.dashboard');

Route::get('/dashboard/profil', function () {
    return view('profil.profil');
})->name('dashboard.profil');

Route::get('/dashboard/clients', function () {
    return view('auth.clients-list');
})->name('dashboard.clients');

Route::get('/dashboard/sells', function () {
    return view('auth.sells-list');
})->name('dashboard.sells');

Route::get('/dashboard/add-produit', function () {
    return view('auth.add-edit-produit');
})->name('dashboard.add-edit-produit');

Route::get('/dashboard/sells/sell-single', function () {
    return view('auth.sell-single');
})->name('dashboard.sell-single');

Route::get('/dashboard/fournisseurs', function () {
    return view('auth.fournisseurs-list');
})->name('dashboard.fournisseurs');

Route::get('/dashboard/payment-status', function () {
    return view('auth.payment-status-list');
})->name('dashboard.payment-status');

Route::get('/dashboard/ratio-static', function () {
    return view('auth.ratio-static');
})->name('dashboard.ratio-static');

Route::get('/dashboard/setting', function () {
    return view('auth.setting');
})->name('dashboard.setting');

Route::get('/dashboard/notifications', function () {
    return view('auth.notifications');
})->name('dashboard.notifications');

Route::get('/dashboard/transaction-history', function () {
    return view('auth.transaction-history');
})->name('dashboard.transaction-history');

Route::get('/dashboard/help-support', function () {
    return view('auth.help-support');
})->name('dashboard.help-support');

Route::get('/dashboard/subscription', function () {
    return view('auth.subscription');
})->name('dashboard.subscription');
