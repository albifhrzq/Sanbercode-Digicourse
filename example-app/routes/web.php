<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

Route::get('/', [DashboardController::class, 'home'])->name('home');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');

Route::get('/data-table', function () {
    return view('data-table');
});

Route::get('/table', function () {
    return view('table');
});