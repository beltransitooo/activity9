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

require __DIR__.'/auth.php';
