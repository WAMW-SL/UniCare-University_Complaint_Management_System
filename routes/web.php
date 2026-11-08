<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'department.index')->name('departments.index');
Route::view('/departments/create', 'department.create')->name('departments.create');
Route::view('/departments/{department}/edit', 'department.edit')
    ->whereNumber('department')
    ->name('departments.edit');
