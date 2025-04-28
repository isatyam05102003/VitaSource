<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vita Source') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/pharma-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/pharma-icon.png') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Base layout */
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #0f172a;
            color: white;
            margin: 0;
            padding: 0;
        }

        h1, h2, h3, label, p, span {
            color: white;
        }

        a {
            color: #60a5fa;
            text-decoration: none;
        }

        a:hover {
            color: #3b82f6;
        }

        /* Form styling */
        form {
            max-width: 600px;
            padding: 20px;
            background-color: #1e293b;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="date"],
        input[type="password"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #475569;
            border-radius: 6px;
            background-color: #334155;
            color: white;
        }

        input::placeholder,
        textarea::placeholder {
            color: #cbd5e1;
        }

        button, a.button {
            background-color: #3b82f6;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            margin-top: 10px;
            display: inline-block;
        }

        button:hover,
        a.button:hover {
            background-color: #2563eb;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #1e293b;
            color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        th, td {
            padding: 12px;
            border: 1px solid #334155;
            text-align: left;
        }

        th {
            background-color: #334155;
            color: #ffffff;
        }

        /* Page container */
        .page-container {
            padding: 40px;
        }
    </style>
</head>
<body class="font-sans antialiased">

        
    <div class="min-h-screen">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-white">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main class="page-container">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
