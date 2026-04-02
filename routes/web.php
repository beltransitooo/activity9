<?php

use Illuminate\Support\Facades\Route;

// Landing para invitados
Route::get('/', function () {
    return view('landingpage');
});

// Dashboard protegido
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', function () {
    return view('dashboard');
})->name('profile.edit');

require __DIR__.'/auth.php';


