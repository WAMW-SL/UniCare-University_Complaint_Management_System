<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCare - User Management</title>

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
            padding: 30px 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .table-card {
            background-color: #ffffff;
            width: 100%;
            max-width: 1100px;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(6, 55, 86, 0.12);
            overflow-x: auto;
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 20px;
            border-bottom: 2px solid #cde6e8;
            padding-bottom: 12px;
        }

        .table-header h2 {
            color: #063756;
            font-size: 22px;
        }

        .add-btn {
            display: inline-block;
            padding: 9px 16px;
            background-color: #1c8b87;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
        }

        .add-btn:hover {
            background-color: #156d6a;
        }

        .alert-success {
            background: #def7ec;
            color: #03543f;
            border: 1px solid #84e1bc;
            padding: 10px 14px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .alert-error {
            background: #fde8e8;
            color: #9b1c1c;
            border: 1px solid #f8b4b4;
            padding: 10px 14px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        thead {
            background-color: #063756;
            color: #ffffff;
        }

        th, td {
            padding: 11px 12px;
            text-align: left;
            border-bottom: 1px solid #e1eff1;
        }

        tbody tr:nth-child(even) {
            background-color: #f4fafa;
        }

        tbody tr:hover {
            background-color: #e6f3f4;
        }

        .edit-link {
            color: #1c8b87;
            font-weight: bold;
            text-decoration: none;
            margin-right: 10px;
        }

        .edit-link:hover {
            text-decoration: underline;
        }

        .delete-btn {
            padding: 5px 10px;
            background-color: #c81e1e;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #9b1c1c;
        }
    </style>
</head>
<body>

<div class="navbar">
        <h1>UniCare</h1>
        <div class="navbar-links">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('register') }}">Add New User</a>
        </div>
    </div>

    <div class="container">
        <div class="table-card">
            <div class="table-header">

    <h2>UniCare Users List</h2>

    <a href="{{ route('register') }}" class="add-btn">+ Add New User</a>
            </div>

   @if (session('success'))
                <div class="alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
                <div class="alert-error">{{ session('error') }}</div>
            @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Student/Staff ID</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->student_or_staff_id ?? 'N/A' }}</td>
                    <td>{{ $user->phone ?? 'N/A' }}</td>
                    <td>{{ $user->is_active ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">Edit</a>

                        @if (auth()->id() !== $user->id)
                            <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Delete this user?')">Delete</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" style="text-align: center; padding: 18px;">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>