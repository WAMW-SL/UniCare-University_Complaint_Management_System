<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Complaint;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        return view('layouts.studentLayout');
    }

    public function showComplaintData(){
        $complaints=Complaint::all();
        return $complaints;
    }

    public function showComplaintCount()
    {
        $total = str_pad(Complaint::count(), 2, '0', STR_PAD_LEFT);
        $pending = str_pad(Complaint::where('Status', 'Pending')->count(), 2, '0', STR_PAD_LEFT);
        $progress = str_pad(Complaint::where('Status', 'In Progress')->count(), 2, '0', STR_PAD_LEFT);
        $resolved = str_pad(Complaint::where('Status', 'Resolved')->count(), 2, '0', STR_PAD_LEFT);
        $assigned = str_pad(Complaint::where('Status', 'Assigned')->count(), 2, '0', STR_PAD_LEFT);

        $count = ['total' => $total, 'pending' => $pending, 'progress' => $progress, 'resolved' => $resolved, 'assigned' => $assigned];

        return $count;
    }
}
