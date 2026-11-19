<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCare - Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #cde6e8;
            margin: 0;
            padding: 20px;
        }

        .form-box {
            max-width: 520px;
            margin: 20px auto;
            background: #ffffff;
            padding: 24px;
            border-radius: 8px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            border: 1px solid #456275;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            padding: 8px 20px;
            background: #1c8b87;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .nav-bar {
         background: #063756;
         color: #ffffff;
         padding: 12px 20px;
         border-radius: 8px;
         max-width: 520px;
         margin: 0 auto 16px auto;
     }

     .nav-bar h3 {
         margin: 0 0 8px 0;
         color: #9be0dc;
     }

     .nav-bar a {
         color: #ffffff;
         text-decoration: none;
         font-size: 14px;
     }

     .nav-bar a:hover {
         color: #9be0dc;
     }

     h2 {
         margin-top: 0;
         color: #063756;
     }

     button:hover {
         background: #146b68;
     }
    </style>
</head>
<body>
    <div class="nav-bar">
        <h3>UniCare</h3>
        <a href="{{ route('dashboard') }}">Dashboard</a> |
        <a href="{{ route('users.index') }}">Users</a> |
        <a href="{{ route('register') }}">User Registration</a> |
        <a href="{{ route('login') }}">Login</a>
    </div>

    <div class="form-box">
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