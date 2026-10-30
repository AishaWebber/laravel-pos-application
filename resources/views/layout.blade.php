<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tasks for Today</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #222;
            padding: 15px;
        }

        nav a {
            color: white;
            margin-right: 20px;
            text-decoration: none;
        }

        nav a:hover {
            color: #ffd700;
        }

        .container {
            background-color: white;
            padding: 25px;
            margin-top: 20px;
            border-radius: 8px;
            max-width: 900px;
        }

        .task {
            border-bottom: 1px solid #ccc;
            padding: 15px 0;
        }

        .task:last-child {
            border-bottom: none;
        }

        .completed {
            color: green;
            font-weight: bold;
        }

        .pending {
            color: orange;
            font-weight: bold;
        }

        h1 {
            color: #222;
        }
    </style>
</head>
<body>

<nav>
    <a href="{{ route('welcome') }}">Today</a>
    <a href="{{ route('tasks.index') }}">All Tasks</a>
    <a href="{{ route('profile') }}">Profile</a>
    <a href="{{ route('about') }}">About</a>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>