<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Model Controller</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-dark">
    @include('partials.header')
    <hr class="border-light m-1">
    <div class="container">
        @yield('content')
    </div>
</body>
</html>