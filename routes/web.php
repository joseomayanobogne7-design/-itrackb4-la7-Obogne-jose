<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', [FilmController::class, 'index'])->name('movies.index');
Route::get('/movies/featured', [FilmController::class, 'featured'])->name('movies.featured');
Route::get('/movies/filter/{genre?}', [FilmController::class, 'filter'])->name('movies.filter');
Route::get('/movies/{id}', [FilmController::class, 'show'])->name('movies.show');