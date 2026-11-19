<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCare - Edit User</title>
</head>
<body>
    <h2>Edit User: {{ $user->name }}</h2>

    <p><a href="{{ route('users.index') }}">Back to Users List</a></p>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
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
</body>
</html>