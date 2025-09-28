<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PariwisataController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pariwisata', [PariwisataController::class, 'index']);