<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">

    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app">

        {{-- navbar y contenido --}}
        @include('components.navbar')
        @include('components.content')

    </div>
    @vite('resources/js/app.js')
    @vite('resources/js/swiper.js')
</body>
</html>
