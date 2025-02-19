<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;





require __DIR__ . '/auth.php';

Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/login', [Controller::class, 'login'])->name('login');
Route::get('/register', [Controller::class, 'register'])->name('register');
Route::get('/logout', [Controller::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/settings', [ProfileController::class, 'settings'])->name('profile.settings');

    Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
    Route::get('{any}', [Controller::class, 'index']);
});
