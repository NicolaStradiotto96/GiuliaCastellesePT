<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giulia Castellese PT</title>
    {{-- VITE --}}
    @VITE(['resources/css/app.css', 'resources/js/app.js'])
    {{-- FAVICON --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('GiuliaSVG-White.svg') }}">
    <link rel="alternate icon" href="{{ asset('favicon.ico') }}">
    @include('partials.svg-sprites')

</head>

<body>
    <x-navbar></x-navbar>

    <div>
        {{ $slot }}
    </div>
</body>

</html>
