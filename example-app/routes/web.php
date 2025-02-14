<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

// Route untuk halaman Home
Route::get('/', [DashboardController::class, 'home'])->name('home');

// Route untuk halaman Register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

// Route untuk halaman Welcome
Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');