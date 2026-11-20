<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCare - Edit User</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #cde6e8;
            color: #063756;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: #063756;
            color: #ffffff;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        }

        .navbar h1 {
            font-size: 22px;
            letter-spacing: 0.5px;
        }

        .navbar-links {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .navbar a {
            color: #cde6e8;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
        }

        .navbar a:hover {
            color: #ffffff;
        }

        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 30px 15px;
        }

        .form-card {
            background-color: #ffffff;
            width: 100%;
            max-width: 520px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(6, 55, 86, 0.12);
        }

        .form-card h2 {
            text-align: center;
            color: #063756;
            margin-bottom: 20px;
            font-size: 22px;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
            color: #063756;
            font-size: 14px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #b0cfd2;
            border-radius: 6px;
            font-size: 14px;
            background-color: #ffffff;
            color: #063756;
            outline: none;
        }

        input:focus,
        select:focus {
            border-color: #1c8b87;
        }

        button {
            width: 100%;
            margin-top: 22px;
            padding: 11px;
            background-color: #1c8b87;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #156d6a;
        }

        .alert-error {
            background: #fde8e8;
            color: #9b1c1c;
            border: 1px solid #f8b4b4;
            padding: 10px 14px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 13px;
        }

        .back-link {
            margin-top: 16px;
            text-align: center;
            font-size: 14px;
        }

        .back-link a {
            color: #1c8b87;
            font-weight: bold;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>UniCare</h1>
        <div class="navbar-links">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('users.index') }}">Users List</a>
        </div>
    </div>

    <div class="container">
        <div class="form-card">
    <h2>Edit User: {{ $user->name }}</h2>

    <p><a href="{{ route('users.index') }}">Back to Users List</a></p>

    @if ($errors->any())
                <div class="alert-error">
                    <ul style="margin: 0; padding-left: 18px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label>Full Name:</label><br>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
        </div><br>

        <div>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div><br>

        <div>
            <label>Role:</label><br>
            <select name="role" required>
                <option value="Student" {{ old('role', $user->role) == 'Student' ? 'selected' : '' }}>Student</option>
                <option value="Staff" {{ old('role', $user->role) == 'Staff' ? 'selected' : '' }}>Staff</option>
                <option value="Worker" {{ old('role', $user->role) == 'Worker' ? 'selected' : '' }}>Worker</option>
                <option value="Admin" {{ old('role', $user->role) == 'Admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div><br>

        <div>
            <label>Student / Staff ID:</label><br>
            <input type="text" name="student_or_staff_id" value="{{ old('student_or_staff_id', $user->student_or_staff_id) }}">
        </div><br>

        <div>
            <label>Phone:</label><br>
            <input type="text" name="phone" value="{{ old('phone', $user->phone) }}">
        </div><br>

        <div>
            <label>Account Status:</label><br>
            <select name="is_active" required>
                <option value="1" {{ old('is_active', $user->is_active) == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('is_active', $user->is_active) == 0 ? 'selected' : '' }}>Inactive</option>
            </select>
        </div><br>

        <button type="submit">Update User</button>
    </form>

    <p class="back-link"><a href="{{ route('users.index') }}">Back to Users List</a></p>
    </div>
    </div>
</body>
</html>