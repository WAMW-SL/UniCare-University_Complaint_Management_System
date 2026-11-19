<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCare - Dashboard</title>
</head>
<body>
    <h2>Welcome, {{ auth()->user()->name }}!</h2>
    <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
    <p><strong>Role:</strong> {{ auth()->user()->role }}</p>
    <p><strong>ID:</strong> {{ auth()->user()->student_or_staff_id ?? 'N/A' }}</p>
    <p><strong>Phone:</strong> {{ auth()->user()->phone ?? 'N/A' }}</p>

    <p><a href="{{ route('users.index') }}">Manage Users (View / Edit / Role / Delete)</a></p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>