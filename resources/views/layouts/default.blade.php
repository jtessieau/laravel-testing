<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Testing</title>
</head>
<body>
    <nav>
        <ul>
            @auth
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            @endauth
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endguest
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>