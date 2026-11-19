@extends('layouts.Pages_without_dashboard')

@section('title', 'Student|Edit Complaint')

@section('content')

    <h2>Edit a Complaint</h2>
    <form>
        <label for="exampleFormControlInput1" class="form-label lbl">Category</label>
        <div class="mb-3 options">
            <select class="category form-select" aria-label="Default select example">
                <option selected>Select a Category</option>
                <option value="1">Furniture</option>
                <option value="2">Plumbing</option>
                <option value="3">Electrical</option>
                <option value="3">Cleaning</option>
                <option value="3">Maintenance</option>4
                <option value="3">Security</option>
                <option value="3">IT Support</option>
            </select>
        </div>
        <label for="exampleFormControlTextarea1" class="form-label lbl">Description</label>
        <div class="mb-3 options">
            <textarea class="form-control category" id="exampleFormControlTextarea1" rows="3" ></textarea>
        </div>
        <div class="options">
        <button type="button" class="btn btn-primary btnSub">Update</button>
        </div>
    </form>
@endsection
