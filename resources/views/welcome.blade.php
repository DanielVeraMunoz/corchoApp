<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'CORCHO') }}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="icon" type="image/png" href="/favicon.png">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="bg-orange-50 min-h-screen flex flex-col items-center justify-center py-12">
            
            <!-- Logo CORCHO -->
            <div class="mb-8 text-center">
                <span class="text-orange-500 text-6xl font-jaro">CORCHO</span>
            </div>
            <!-- Tarjeta principal -->
            <div class="bg-white border border-gray-950 shadow-sm p-8 w-full max-w-lg mx-4">
                
                <!-- Título -->
                <h1 class="text-2xl font-bold text-gray-800 text-center mb-4">
                    El corcho de tu comunidad, ahora digital
                </h1>
                
                <!-- Descripción -->
                <p class="text-gray-600 text-center mb-6">
                    Comparte información con tus vecinos, pide ayuda cuando la necesites,
                    vende aquello que ya no usas... 
                    <br>¡como un corcho de toda la vida!
                </p>
                
                <!-- Iconos de ejemplo -->
                <div class="flex justify-center gap-6 mb-6 text-orange-500 text-2xl">
                    <div class="text-center">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                        <p class="text-xs text-gray-500 mt-1">Ayuda</p>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-bullhorn"></i>
                        <p class="text-xs text-gray-500 mt-1">Avisos</p>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <p class="text-xs text-gray-500 mt-1">Mercadillo</p>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p class="text-xs text-gray-500 mt-1">Eventos</p>
                    </div>
                </div>
                
                <!-- Separador -->
                <div class="border-b border-gray-300 mb-6"></div>
                
                <!-- Botones -->
                <div class="flex flex-col gap-3">
                    <a href="{{ route('login') }}" class="block text-center bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 rounded">
                        Entrar
                    </a>
                    <a href="{{ route('register') }}" class="block text-center border-2 border-orange-500 text-orange-500 hover:bg-orange-50 font-bold py-3 rounded">
                        Regístrate
                    </a>
                </div>
                
            </div>
            
            <!-- Footer -->
            <p class="mt-6 text-sm text-gray-500 text-center">
                Una comunidad conectada es una comunidad mejor 💛
            </p>
            
        </div>
    </body>
</html>