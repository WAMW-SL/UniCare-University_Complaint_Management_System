@extends('layouts.formLayout')

@section('title', 'Student|Submit Complaint')

@section('content')

    <h2>Submit a Complaint</h2>
    <form action="{{ route('student.storeComplaintData') }}" method="POST">
        @csrf
        <label for="exampleFormControlInput1" class="form-label lbl">Category</label>
        <div class="mb-3 options">
            <select class="category form-select" aria-label="Default select example" name='category'>
                <option selected>Select a Category</option>
                <option>Furniture</option>
                <option>Plumbing</option>
                <option>Electrical</option>
                <option>Cleaning</option>
                <option>Maintenance</option>4
                <option>Security</option>
                <option>IT Support</option>
            </select>
        </div>
        <label for="exampleFormControlTextarea1" class="form-label lbl">Description</label>
        <div class="mb-3 options">
            <textarea class="form-control category" id="exampleFormControlTextarea1" rows="3" name='desc'>Describe your Complaint</textarea>
        </div>
        <div class="options">
        <button type="submit" class="btn btn-primary btnSub">Submit</button>
        </div>
    </form>
@endsection
