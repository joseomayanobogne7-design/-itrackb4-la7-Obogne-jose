<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teachers/featured', [TeacherController::class, 'featured'])->name('teachers.featured');
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('/teachers/{teacher}', [TeacherController::class, 'show'])->name('teachers.show');

Route::get('/subjects/featured', [SubjectController::class, 'featured'])->name('subjects.featured');

Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index');

Route::get('/subjects/{course?}', function ($course = null) {
    return redirect()->route('subjects.index', ['course' => $course]);
})->name('subjects.old');

Route::get('/subjects/{subject}', [SubjectController::class, 'show'])->name('subjects.show');