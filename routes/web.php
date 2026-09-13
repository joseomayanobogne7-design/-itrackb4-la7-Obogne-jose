<?php

use Illuminate\Support\Facades\Route;

// Pahina Listahan
Route::get('/', function () {
    return view('subjects.index');
});

Route::get('/subjects', function () {
    return view('subjects.index');
});

// DETALYE NG SUBJECT — DAPAT NASA ITAAS O BAGO ANG IBANG ROUTE!
Route::get('/subjects/{id}', function ($id) {
    $subjects = [
        1 => ['code'=>'ITRACKB4', 'title'=>'Web Systems and Technologies', 'units'=>3, 'course'=>'BSIT'],
        2 => ['code'=>'ITEC101', 'title'=>'Introduction to Computing', 'units'=>3, 'course'=>'BSIT'],
        3 => ['code'=>'ITI202', 'title'=>'Database Management Systems', 'units'=>3, 'course'=>'BSIT'],
        4 => ['code'=>'ITPRO3', 'title'=>'Computer Programming', 'units'=>3, 'course'=>'BSIT'],
        5 => ['code'=>'ITNET01', 'title'=>'Networking Fundamentals', 'units'=>3, 'course'=>'BSIT'],
        6 => ['code'=>'GE101', 'title'=>'Understanding the Self', 'units'=>3, 'course'=>'GED'],
        7 => ['code'=>'ITEL03', 'title'=>'Platform Technologies', 'units'=>3, 'course'=>'BSIT'],
    ];

    if (!isset($subjects[$id])) {
        abort(404);
    }

    return view('subjects.show', ['subj' => $subjects[$id], 'id' => $id]);
});

Route::get('/second-page', function () {
    return view('second-page');
});
