<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PariwisataController;

Route::get('/', function () {
    return view('welcome');
});

