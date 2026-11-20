<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCare - Login</title>
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

        .navbar a {
            color: #cde6e8;
            text-decoration: none;
            margin-left: 18px;
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
            align-items: center;
            padding: 30px 15px;
        }

        .form-card {
            background-color: #ffffff;
            width: 100%;
            max-width: 420px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(6, 55, 86, 0.12);
        }

        .form-card h2 {
            text-align: center;
            color: #063756;
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
            color: #063756;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #b0cfd2;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
        }

        input:focus {
            border-color: #1c8b87;
        }

        button {
            width: 100%;
            margin-top: 20px;
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
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 14px;
            font-size: 13px;
        }

        .register-link {
            margin-top: 16px;
            text-align: center;
            font-size: 14px;
        }

        .register-link a {
            color: #1c8b87;
            font-weight: bold;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>UniCare</h1>
        <div>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
    </div>

    <div class="container">
        <div class="form-card">

    <h2>UniCare Login</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div><br>

        <div>
            <label>Password:</label><br>
            <input type="password" name="password" required>
        </div><br>

        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
    </div>                    
    </div>
</body>
</html>