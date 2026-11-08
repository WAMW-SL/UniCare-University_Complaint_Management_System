@extends('layouts.department')

@section('title', 'Departments')

@section('content')
    <h1 class="page-heading">Departments</h1>
    <div class="list-toolbar">
        <h2>Department list</h2>
        <a class="button" href="{{ route('departments.create') }}">
            <span aria-hidden="true">+</span>
            Add
        </a>
    </div>

    <div class="table-wrap">
        <table class="department-table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col" aria-label="Actions"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="department-name">IT Support</td>
                    <td class="department-email">itsupport@example.com</td>
                    <td>
                        <div class="row-actions">
                            <a class="button button-small" href="{{ route('departments.edit', 1) }}">Edit</a>
                            <button class="button button-danger button-small" type="button">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="department-name">Maintenance</td>
                    <td class="department-email">maintenance@example.com</td>
                    <td>
                        <div class="row-actions">
                            <a class="button button-small" href="{{ route('departments.edit', 2) }}">Edit</a>
                            <button class="button button-danger button-small" type="button">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="department-name">Library</td>
                    <td class="department-email">library@example.com</td>
                    <td>
                        <div class="row-actions">
                            <a class="button button-small" href="{{ route('departments.edit', 3) }}">Edit</a>
                            <button class="button button-danger button-small" type="button">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
