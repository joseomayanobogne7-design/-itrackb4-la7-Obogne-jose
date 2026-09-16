<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/books', 'App\Http\Controllers\BooksController@index')->name('books.index');
Route::get('/books/featured', 'App\Http\Controllers\BooksController@featured')->name('books.featured');
Route::get('/books/filter', 'App\Http\Controllers\BooksController@filter')->name('books.filter');
Route::get('/books/{book}', 'App\Http\Controllers\BooksController@show')->name('books.show');