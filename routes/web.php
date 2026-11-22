<?php
use App\Http\Controllers\Student\ComplaintController;
use App\Http\Controllers\Student\DashboardController as StudentDashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::post('student/storeComplaintData',[ComplaintController::class,'storeComplaintData'])->name('student.storeComplaintData');
Route::get('student',[StudentDashboardController::class,'showComplaintData'])->name('student.showComplaintData');
Route::get('student/submitComplaint',[ComplaintController::class,'submitComplaint'])->name('student.submitComplaint');
Route::get('student/editComplaint/{complaintID}',[ComplaintController::class,'editComplaint'])->name('student.editComplaint');
Route::put('student/updateComplaintData/{complaintID}',[ComplaintController::class,'updateComplaintData'])->name('student.updateComplaintData');
Route::get('student/deleteComplaintData/{complaintID}',[ComplaintController::class,'deleteComplaintData'])->name('student.deleteComplaintData');

Route::get('admin',[AdminDashboardController::class,'showComplaintData'])->name('admin.showComplaintData');
