<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">

    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>
<body class="">
    <div id="app">

        {{-- Header y navbar --}}
        @include('components.navbar')
        @yield('content')
  
    </div>
    @vite('resources/js/app.js')
</body>
</html>
