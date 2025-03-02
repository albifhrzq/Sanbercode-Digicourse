<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FilmController;

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

//CRUD Cast
Route::get('/cast', [CastController::class, 'index'])->name('cast.index');
Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
Route::post('/cast', [CastController::class, 'store'])->name('cast.store');
Route::get('/cast/{id}', [CastController::class, 'show'])->name('cast.show');
Route::get('/cast/{id}/edit', [CastController::class, 'edit'])->name('cast.edit');
Route::put('/cast/{id}', [CastController::class, 'update'])->name('cast.update');
Route::delete('/cast/{id}', [CastController::class, 'destroy'])->name('cast.destroy');

//CRUD genres
Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
Route::get('/genre/create', [GenreController::class, 'create'])->name('genre.create');
Route::post('/genre', [GenreController::class, 'store'])->name('genre.store');
Route::get('/genre/{id}', [GenreController::class, 'show'])->name('genre.show');
Route::get('/genre/{id}/edit', [GenreController::class, 'edit'])->name('genre.edit');
Route::put('/genre/{id}', [GenreController::class, 'update'])->name('genre.update');
Route::delete('/genre/{id}', [GenreController::class, 'destroy'])->name('genre.destroy');

//CRUD films
Route::get('/film', [FilmController::class, 'index'])->name('film.index');
Route::get('/film/create', [FilmController::class, 'create'])->name('film.create');
Route::post('/film', [FilmController::class, 'store'])->name('film.store');
Route::get('/film/{id}', [FilmController::class, 'show'])->name('film.show');
Route::get('/film/{id}/edit', [FilmController::class, 'edit'])->name('film.edit');
Route::put('/film/{id}', [FilmController::class, 'update'])->name('film.update');
Route::delete('/film/{id}', [FilmController::class, 'destroy'])->name('film.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
