<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Point-of-Sale Application</title>
</head>
<body>
    <h1>Point-of-Sale Application</h1>

    <p>Welcome to the POS management system.</p>

    @auth
        <p>
            You are currently logged in.
        </p>

        <a href="{{ route('customers.index') }}">
            Customers
        </a>

        <br><br>

        <a href="{{ route('users.index') }}">
            Users
        </a>

        <br><br>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit">
                Log Out
            </button>
        </form>
    @else
        <a href="{{ route('login') }}">
            Log In
        </a>

        <br><br>

        <a href="{{ route('register') }}">
            Register
        </a>
    @endauth
</body>
</html>