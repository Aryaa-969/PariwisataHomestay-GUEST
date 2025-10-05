<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PariwisataController;

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'index'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Halaman setelah login sukses
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pariwisata', [PariwisataController::class, 'index']);