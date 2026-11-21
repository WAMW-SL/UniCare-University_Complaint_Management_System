<?php
use App\Http\Controllers\Student\ComplaintController;
use App\Http\Controllers\Student\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student/editComplaint', function () {
    return view('student.complaints.edit');
});

Route::get('/student', function () {
    return view('student.show');
});

Route::post('student/storeComplaintData',[ComplaintController::class,'storeComplaintData'])->name('student.storeComplaintData');
Route::get('student',[DashboardController::class,'showComplaintData'])->name('student.showComplaintData');
Route::get('stuednt/submitComplaint',[ComplaintController::class,'submitComplaint'])->name('student.submitComplaint');
