<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="bg-orange-50 min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div class ="mb-12">
                <a href="/">
                    <span class="text-orange-500 text-6xl font-jaro hover:text-orange-600">
                        CORCHO
                        </span>
                </a>
            </div>

            <div class="bg-white border border-gray-950 shadow-sm p-6 w-96 md:w-[520px]">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
