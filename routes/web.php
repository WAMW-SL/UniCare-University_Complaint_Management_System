<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student/submitComplaint', function () {
    return view('student.complaints.create');
});

Route::get('/student/editComplaint', function () {
    return view('student.complaints.edit');
});

Route::get('/student/layout', function () {
    return view('layouts.studentLayout');
});
