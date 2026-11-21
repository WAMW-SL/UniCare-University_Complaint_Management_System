@extends('layouts.formLayout')

@section('title', 'Student|Edit Complaint')

@section('content')

    <h2>Edit a Complaint</h2>
    <form action="{{ route('student.updateComplaintData',$complaint->Complaint_ID) }}" method="POST">
        @method('PUT')
        <label for="exampleFormControlInput1" class="form-label lbl">Category</label>
        <div class="mb-3 options">
            <select class="category form-select" aria-label="Default select example" name='category'>
                <option {{ $complaint->Category==="Furniture"?"Selected":"" }}>Furniture</option>
                <option {{ $complaint->Category==="Plumbing"?"Selected":"" }}>Plumbing</option>
                <option  {{ $complaint->Category==="Electrical"?"Selected":"" }}>Electrical</option>
                <option  {{ $complaint->Category==="Cleaning"?"Selected":"" }}>Cleaning</option>
                <option  {{ $complaint->Category==="Maintenance"?"Selected":"" }}>Maintenance</option>4
                <option  {{ $complaint->Category==="Security"?"Selected":"" }}>Security</option>
                <option  {{ $complaint->Category==="IT Support"?"Selected":"" }}>IT Support</option>
            </select>
        </div>
        <label for="exampleFormControlTextarea1" class="form-label lbl">Description</label>
        <div class="mb-3 options">
            <textarea class="form-control category" id="exampleFormControlTextarea1" rows="3" name="desc">{{ $complaint->Description }}</textarea>
        </div>
        <div class="options">
        <button type="submit" class="btn btn-primary btnSub">Update</button>
        </div>
    </form>
@endsection
