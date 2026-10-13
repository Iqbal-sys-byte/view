<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a href="/" class="navbar-brand">Portal</a>
            @if(session()->has('key'))
                <div class="d-flex gap-2">
                    <a href="{{ route('berita.index') }}" class="btn btn-outline-dark">Berita </a>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            @endif
        </div>
    </nav>

    <main class="container flex-grow-1">
        @yield('content')
    </main>

    <footer class="text-body-secondary container mt-auto py-3">
        <p class="mb-0">&copy; MUHAMMAD IQBAL QAULAN HANIF | PORTAL BERITA</p>
    </footer>
</body>
</html>