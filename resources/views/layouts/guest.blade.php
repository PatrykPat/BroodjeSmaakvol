<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-white-900 antialiased">
        <div class="padaanpas min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="topImg"><img src="images/wavesboven.svg" class="waveMaxTop"></div>
            <div class="logo">
                <a href="/">
                    <x-application-logo class="LogoBS"/>
                </a>
            </div>
            <div class="form">
                {{ $slot }}
            </div>
            <div class="botImg"><img src="images/wavesonder.svg" class="waveMaxBot"></div>
        </div>
    </body>
</html>
