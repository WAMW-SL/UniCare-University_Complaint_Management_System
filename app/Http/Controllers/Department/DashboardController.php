<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use  App\Models\Complaint;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showComplaintData(){
        $complaints=Complaint::all();
        return view('layouts.departmentLayout',compact('complaints'));
    }
}
