<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Videoclub')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Bienvenido al Videoclub</h1>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/catalog">Catálogo</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Derechos reservados &copy; {{ date('Y') }}</p>
    </footer>
</body>
</html>
