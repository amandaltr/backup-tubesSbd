<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Divergent Travelers</title>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
</head>
<body>
    <header>
        @include('profile.partials.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('profile.partials.footer')
    </footer>
    <script src="{{ asset('resources/js/app.js') }}"></script>
</body>
</html>
