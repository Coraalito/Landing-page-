<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app">
        @yield('content')
        <h1>Hola mundo desde laravel con tailwind</h1>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
