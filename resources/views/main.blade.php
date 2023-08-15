<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Compumedic</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @yield('styles')
</head>
<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
</body>
</html>