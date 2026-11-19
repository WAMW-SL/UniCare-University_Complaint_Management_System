<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student/submitComplaint', function () {
    return view('student.complaints.create');
});

