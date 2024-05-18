<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="/resources/css/app.css" rel="stylesheet"/>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css' ])

</head>
<body class="h-full bg-secondary" style="background-image: var( --bs-gradient)">
    <x-navbar>
        {{$slot}}
    </x-navbar>
    <main>
        {{$slot}}
    </main>
</body>
</html>