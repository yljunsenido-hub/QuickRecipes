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
    <body class="h-screen w-screen bg-cover bg-center" style="background-image: url('/images/background.jpg');">
    <div class="h-full w-full bg-black/10 flex items-center justify-center">
            <div class="flex flex-col md:flex-row w-11/12 md:w-8/12 lg:w-6/12  rounded-lg p-8 " style="background-color: #28283B; ">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
