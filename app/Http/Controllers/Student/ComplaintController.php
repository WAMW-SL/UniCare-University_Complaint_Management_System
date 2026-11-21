<?php

namespace App\Http\Controllers\Student;

use App\Models\Complaint;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function storeComplaintData(Request $request){
        $complaint=new Complaint();
        //$complaint->User_ID="U-001";
        $complaint->Description=$request->desc;
        $complaint->Category=$request->category;
        $complaint->Submitted_Date=date('Y-m-d');
        $complaint->Submitted_Time=date("H:i:s");
        $complaint->Status="Pending";
        $complaint->save();

        $complaint->Complaint_ID='C-'.str_pad(strval($complaint->id),4,'0',STR_PAD_LEFT);
        $complaint->save();
        return redirect()->route('student.showComplaintData');
    }

    public function submitComplaint(){
        return view('student.complaints.create');
    }

    public function editComplaint($complaintID){
       $complaint=Complaint::where('Complaint_ID', $complaintID)->first();
       return view('student.complaints.edit',compact('complaint'));
    }

    public function updateComplaintData(Request $request,$complaintID){
        $complaint=Complaint::where('Complaint_ID',$complaintID)->first();
        $complaint->Category=$request->category;
        $complaint->Description=$request->desc;
        $complaint->save();
        return redirect()->route('student.showComplaintData');
    }
}
