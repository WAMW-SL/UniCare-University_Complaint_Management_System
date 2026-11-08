@extends('layouts.department')

@section('title', 'Edit department')

@section('content')
    <div class="form-panel">
        <h1 class="page-heading">Edit a Department</h1>
        <form class="department-form">
            <div class="form-field">
                <label for="department-name">Name</label>
                <input class="text-input" id="department-name" name="name" type="text" value="IT Support" autocomplete="organization">
            </div>
            <div class="form-field">
                <label for="department-email">Email</label>
                <input class="text-input" id="department-email" name="email" type="email" value="itsupport@example.com" autocomplete="email">
            </div>
            <div class="form-actions">
                <a class="button button-secondary" href="{{ route('departments.index') }}">Cancel</a>
                <button class="button" type="button">Update</button>
            </div>
        </form>

        <a class="back-link" href="{{ route('departments.index') }}">← Back to departments</a>
    </div>
@endsection
