<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vita Source - Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600" rel="stylesheet" />

    <link rel="icon" type="image/png" href="{{ asset('images/pharma-icon.png') }}">
    <!-- Styling -->
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Figtree', sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e293b);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            height: 100vh;
            margin: 0;
            text-align: center;
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.03);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
            max-width: 420px;
            width: 100%;
        }

        .logo {
            width: 80px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 12px;
            font-weight: 600;
            color: #ffffff;
        }

        p {
            font-size: 16px;
            margin-bottom: 30px;
            color: #cbd5e1;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
        }

        .buttons a {
            background-color: #3b82f6;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .buttons a:hover {
            background-color: #2563eb;
            transform: scale(1.05);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <img src="{{ asset('images/pharma-icon.png') }}" alt="Pharmacy Logo" class="logo">

        <h1>Welcome to Vita Source</h1>
        <p>Your trusted partner in pharmacy management.</p>

        <div class="buttons">
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
    </div>

</body>
</html>
