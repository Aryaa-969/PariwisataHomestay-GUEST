<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PariwisataController;

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'index'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Halaman setelah login sukses
Route::get('/home', function () {
    return view('guest.index');
})->name('index');

Route::get('/contact', function () {
    return view('guest.contact');
})->name('contact');

Route::get('/about', function () {
    return view('guest.about');
})->name('about');

Route::get('/service', function () {
    return view('guest.service');
})->name('service');

Route::get('/package', function () {
    return view('guest.package');
})->name('package');

Route::get('/404', function () {
    return view('guest.404');
})->name('404');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/booking', function () {
    return view('guest.booking');
})->name('booking');

Route::get('/your-booking', function () {
    return view('guest.yourBooking');
})->name('yourBooking');

Route::get('/pariwisata', [PariwisataController::class, 'index']);