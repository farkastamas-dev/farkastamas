<!DOCTYPE html>
<html class="lenis-smooth" data-scroll-orientation="vertical" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>{{ config('app.name') }}</title>
    <meta property="og:title" content="{{ config('app.name') }}" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:locale" content="hu_HU" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta property="article:publisher" content="https://www.facebook.com/farkastamas.dev" />
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" crossorigin rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

</head>

<body class="scroll-smooth">
    <div id="app">
        <div>
            <x-parents.mainmenu />
        </div>
        {{ $slot }}
        @vite('resources/js/app.js')
</body>

</html>
