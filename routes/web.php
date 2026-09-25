<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::get('/', function () {
    return view('welcome');
});

// ✅ PART A: ONE route for the list page
Route::get('/books', [BooksController::class, 'index'])->name('books.index');

// ✅ PART C: Redirect old filter URL → new query-string URL
Route::get('/books/{oldFilter?}', function ($oldFilter = null) {
    $query = $oldFilter ? ['author' => $oldFilter] : [];
    return redirect()->route('books.index', $query);
});

// Other routes
Route::get('/books/featured', [BooksController::class, 'featured'])->name('books.featured');
Route::resource('books', BooksController::class)->except(['index', 'create', 'store', 'edit', 'update', 'destroy']);