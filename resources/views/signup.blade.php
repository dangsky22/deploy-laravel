<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            background: #eaf3fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Figtree', sans-serif;
        }
        .root {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 90vw;
            max-width: 380px;
            background: #fff;
            border-radius: 24px;
            padding: 28px;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            display: flex;
            flex-direction: column;
        }
        .logo {
            width: 80px;
            height: 80px;
            margin-bottom: 18px;
            border-radius: 20px;
            object-fit: cover;
        }
        .title {
            font-size: 26px;
            font-weight: bold;
            color: #222;
            margin-bottom: 4px;
        }
        .subtitle {
            font-size: 15px;
            color: #666;
            margin-bottom: 22px;
        }
        .input {
            width: 85%;
            max-width: 280px;
            height: 48px;
            background: #f3f4f6;
            border-radius: 12px;
            padding: 0 16px;
            font-size: 16px;
            color: #222;
            margin-bottom: 12px;
            border: none;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .error {
            color: #e74c3c;
            font-size: 13px;
            margin-bottom: 8px;
            align-self: flex-start;
        }
        .signupBtn {
            width: 100%;
            background: #6C4DF4;
            padding: 14px 0;
            border-radius: 12px;
            color: #fff;
            font-size: 17px;
            font-weight: bold;
            letter-spacing: 0.5px;
            text-align: center;
            margin-bottom: 18px;
            border: none;
            cursor: pointer;
            box-shadow: 0 1px 4px rgba(0,0,0,0.10);
        }
        .loginRow {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-top: 2px;
        }
        .loginText {
            color: #444;
            font-size: 14px;
        }
        .loginLink {
            color: #6C4DF4;
            font-weight: bold;
            font-size: 14px;
            text-decoration: none;
            margin-left: 2px;
        }
    </style>
</head>
<body>
    <div class="root">
        <div class="container">
            <img src="{{ asset('assets/images/kost.png') }}" class="logo" alt="Logo">
            <div class="title">Create Account</div>
            <div class="subtitle">Sign up to get started</div>
            @if(session('error'))
                <div class="error">{{ session('error') }}</div>
            @endif
            <form method="POST" action="/signup">
                @csrf
                <input type="text" name="name" class="input" placeholder="Full Name" required autofocus>
                <input type="email" name="email" class="input" placeholder="Email" required>
                <input type="password" name="password" class="input" placeholder="Password" required>
                <input type="password" name="password_confirmation" class="input" placeholder="Confirm Password" required>
                <button type="submit" class="signupBtn">Sign Up</button>
            </form>
            <div class="loginRow">
                <span class="loginText">Already have an account? </span>
                <a href="/login" class="loginLink">Login</a>
            </div>
        </div>
    </div>
</body>
</html>
