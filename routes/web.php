<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingHomestayController;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WargaController;
use Illuminate\Support\Facades\Route;

Route::resource('booking', BookingHomestayController::class);
Route::resource('warga', WargaController::class);
Route::resource('users', UserController::class);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman setelah login sukses
Route::get('/', function () {
    return view('guest.pages.webview.index');
})->name('index');

Route::get('/contact', function () {
    return view('guest.pages.webview.contact');
})->name('contact');

Route::get('/about', function () {
    return view('guest.pages.webview.about');
})->name('about');

Route::get('/service', function () {
    return view('guest.pages.webview.service');
})->name('service');

Route::get('/package', function () {
    return view('guest.pages.webview.package');
})->name('package');

Route::get('/404', function () {
    return view('guest.pages.webview.404');
})->name('404');

Route::get('/loginn', function () {
    return view('guest.pages.auth.login-form');
})->name('form-login');

//Route::get('/user', function () {
//return view('guest.user.index');
//});

// Booking Homestay Routes
//Route::get('/booking', [BookingHomestayController::class, 'index'])->name('booking.index');
//Route::post('/booking', [BookingHomestayController::class, 'store'])->name('booking.store');
//Route::get('/booking/{booking}/edit', [BookingHomestayController::class, 'edit'])->name('booking.edit');
//Route::delete('/booking/{id}', [BookingHomestayController::class, 'destroy'])->name('booking.destroy');
//Route::put('/booking/{booking}', [BookingHomestayController::class, 'update'])->name('booking.update');

// Warga Routes
//Route::get('/warga', [WargaController::class, 'index'])->name('warga.index');
//Route::post('/warga', [WargaController::class, 'store'])->name('warga.store');
//Route::delete('/warga/{id}', [WargaController::class, 'destroy'])->name('warga.destroy');
//Route::put('/warga/{id}', [WargaController::class, 'update'])->name('warga.update');
//Route::get('/warga/{data}/edit', [WargaController::class, 'edit'])->name('warga.edit');

