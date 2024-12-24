<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Team RRQ')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="navbar">
        <div class="container">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('images/rrq-logo.jpeg') }}" alt="Team RRQ Logo">
                </a>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/blog">Blog</a></li>
                    @auth
                        <li><a href="/profile">Profile</a></li>
                        <li><a href="/logout">Logout</a></li>
                    @else
                        <li><a href="/signin">Sign In</a></li>
                        <li><a href="/signup">Sign Up</a></li>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>    
    <main class="content">
        @yield('content')
    </main>
    @include('components.footer')
</body>
</html>
