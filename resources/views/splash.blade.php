<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Splash Screen</title>
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
            width: 95vw;
            max-width: 400px;
            height: 98vh;
            background: #fff;
            border-radius: 36px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 4px 12px rgba(0,0,0,0.10);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
        }
        .container img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 36px;
            z-index: 1;
        }
        .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(255,255,255,0.10);
            border-radius: 36px;
            z-index: 2;
        }
        .content {
            position: absolute;
            top: 18%;
            width: 100%;
            text-align: center;
            z-index: 3;
            padding: 0 24px;
        }
        .titleSmall {
            font-size: 20px;
            color: #222;
            font-weight: 400;
            margin-bottom: 0;
            letter-spacing: 0.2px;
        }
        .titleBig {
            font-size: 40px;
            color: #222;
            font-weight: bold;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
        }
        .subtitle {
            font-size: 16px;
            color: #444;
            margin-top: 2px;
            line-height: 22px;
        }
        .button {
            width: 85%;
            background: #000;
            padding: 16px 0;
            border-radius: 14px;
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-align: center;
            position: absolute;
            bottom: 32px;
            left: 7.5%;
            right: 7.5%;
            z-index: 4;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="root">
        <div class="container">
            <img src="{{ asset('assets/images/kost.png') }}" alt="Splash Image">
            <div class="overlay"></div>
            <div class="content">
                <div class="titleSmall">Lets find your</div>
                <div class="titleBig">Paradise</div>
                <div class="subtitle">Find with us your dream<br>home quickly and precisely</div>
            </div>
            <a href="/login" class="button">Get Started</a>
        </div>
    </div>
</body>
</html>