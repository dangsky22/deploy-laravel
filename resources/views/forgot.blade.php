<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
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
            width: 70px;
            height: 70px;
            margin-bottom: 18px;
            border-radius: 18px;
            object-fit: cover;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            color: #222;
            margin-bottom: 4px;
        }
        .subtitle {
            font-size: 15px;
            color: #666;
            margin-bottom: 22px;
            text-align: center;
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
        .sendBtn {
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
        .backRow {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-top: 2px;
            justify-content: center;
        }
        .backLink {
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
            <div class="title">Forgot Password</div>
            <div class="subtitle">Enter your email address and we'll send you a link to reset your password.</div>
            @if(session('error'))
                <div class="error">{{ session('error') }}</div>
            @endif
            <form method="POST" action="/forgot">
                @csrf
                <input type="email" name="email" class="input" placeholder="Email" required autofocus>
                <button type="submit" class="sendBtn">Send Reset Link</button>
            </form>
            <div class="backRow">
                <a href="/login" class="backLink">Back to Login</a>
            </div>
        </div>
    </div>
</body>
</html>
