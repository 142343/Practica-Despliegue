<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
</head>
<body>
    <header>
        <nav>
            <!-- Aquí puedes agregar tu menú o barra de navegación -->
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Pie de página -->
    </footer>
</body>
</html>
