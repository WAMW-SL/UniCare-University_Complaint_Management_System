<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCare - Register</title>
</head>
<body>
    <div>
        <h3>UniCare</h3>
        <a href="{{ route('dashboard') }}">Dashboard</a> |
        <a href="{{ route('users.index') }}">Users</a> |
        <a href="{{ route('register') }}">User Registration</a> |
        <a href="{{ route('login') }}">Login</a>
    </div>

    <hr>

    <div>
        <h2>Registration Form</h2>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label>Full Name</label><br>
                <input type="text" name="name" value="{{ old('name') }}" required>
                @error('name') <div>{{ $message }}</div> @enderror
            </div><br>

            <div>
                <label>Email Address</label><br>
                <input type="email" name="email" value="{{ old('email') }}" required>
                @error('email') <div>{{ $message }}</div> @enderror
            </div><br>

            <div>
                <label>Student / Staff ID</label><br>
                <input type="text" name="student_or_staff_id" value="{{ old('student_or_staff_id') }}">
            </div><br>

            <div>
                <label>Phone</label><br>
                <input type="text" name="phone" value="{{ old('phone') }}">
            </div><br>

            <div>
                <label>Password</label><br>
                <input type="password" name="password" required>
                @error('password') <div>{{ $message }}</div> @enderror
            </div><br>

            <div>
                <label>Confirm Password</label><br>
                <input type="password" name="password_confirmation" required>
            </div><br>

            <div>
                <label>Role</label><br>
                <select name="role" required>
                    <option value="">-- Select Role --</option>
                    <option value="Student" {{ old('role') == 'Student' ? 'selected' : '' }}>Student</option>
                    <option value="Staff" {{ old('role') == 'Staff' ? 'selected' : '' }}>Staff</option>
                    <option value="Worker" {{ old('role') == 'Worker' ? 'selected' : '' }}>Worker</option>
                </select>
                @error('role') <div>{{ $message }}</div> @enderror
            </div><br>

            <button type="submit">Register</button>

            <p>
                Already have an account? <a href="{{ route('login') }}">Login</a>
            </p>
        </form>
    </div>
</body>
</html>