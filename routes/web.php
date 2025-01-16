<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', WebController::class . '@index')->name('index');
Route::get('/dashboard', WebController::class . '@dashboard')->name('dashboard');
Route::get('/login', WebController::class . '@login')->name('auth.login');
Route::get('/register', WebController::class . '@register')->name('auth.register');
