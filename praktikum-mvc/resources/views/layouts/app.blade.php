<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Praktikum Laravel')</title>
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Praktikum Laravel</p>
    </footer>

</body>
</html>