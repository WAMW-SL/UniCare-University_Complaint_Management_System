<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCare - Dashboard</title>

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

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 15px;
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

        .logout-btn {
            padding: 7px 14px;
            background-color: #1c8b87;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #156d6a;
        }

        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 35px 15px;
        }

        .dashboard-card {
            background-color: #ffffff;
            width: 100%;
            max-width: 600px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(6, 55, 86, 0.12);
        }

        .dashboard-card h2 {
            color: #063756;
            margin-bottom: 20px;
            font-size: 24px;
            border-bottom: 2px solid #cde6e8;
            padding-bottom: 10px;
        }

        .info-row {
            padding: 9px 0;
            border-bottom: 1px solid #eef6f7;
            font-size: 15px;
        }

        .action-box {
            margin-top: 22px;
        }

        .manage-btn {
            display: inline-block;
            padding: 10px 18px;
            background-color: #1c8b87;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
        }

        .manage-btn:hover {
            background-color: #156d6a;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>UniCare</h1>
        <div class="navbar-right">
            <a href="{{ route('users.index') }}">Manage Users</a>
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="dashboard-card">

    <h2>Welcome, {{ auth()->user()->name }}!</h2>
    <div class="info-row"><p><strong>Email:</strong> {{ auth()->user()->email }}</p></div>
    <div class="info-row"><p><strong>Role:</strong> {{ auth()->user()->role }}</p></div>
    <div class="info-row"><p><strong>ID:</strong> {{ auth()->user()->student_or_staff_id ?? 'N/A' }}</p></div>
    <div class="info-row"><p><strong>Phone:</strong> {{ auth()->user()->phone ?? 'N/A' }}</p></div>

    <div class="action-box">
                <a href="{{ route('users.index') }}" class="manage-btn">Manage Users (View / Edit / Role / Delete)</a>
            </div>
        </div>
    </div>

    
</body>
</html>