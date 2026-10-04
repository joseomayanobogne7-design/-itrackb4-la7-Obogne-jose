<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;

Route::get('/', function () {
    return view('welcome');
});

// Teachers routes
Route::get('/teachers/featured', [TeacherController::class, 'featured'])->name('teachers.featured');
Route::resource('/teachers', TeacherController::class)->only(['index', 'show']);

// Subjects routes
Route::get('/subjects/featured', [SubjectController::class, 'featured'])->name('subjects.featured');

// ✅ LA6 Part C: Redirect old filter route to new query string version
Route::get('/subjects/filter/{course}', function ($course) {
    return redirect()->route('subjects.index', ['course' => $course]);
})->name('subjects.filter');

// ✅ LA7: Added create and store routes
Route::get('/subjects/create', [SubjectController::class, 'create'])->name('subjects.create');
Route::post('/subjects', [SubjectController::class, 'store'])->name('subjects.store');

// ✅ Main subjects route — ONE route handles everything!
Route::resource('/subjects', SubjectController::class)->only(['index', 'show']);