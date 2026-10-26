<!DOCTYPE html>
<html>
<head>
    <title>Laravel POS Application</title>

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

        .container {
            background-color: white;
            padding: 25px;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<nav>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('customers') }}">Customer Accounts</a>
    <a href="{{ route('users') }}">User Accounts</a>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>