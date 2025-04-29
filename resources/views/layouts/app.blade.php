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
    <body class="font-sans antialiased h-screen overflow-hidden">
        <div class="flex flex-col h-screen">
        <!-- Navigation -->
        <div class="sticky top-0 z-50">
            @include('layouts.navigation')
        </div>

        <div class="flex flex-1 overflow-hidden">
            <!-- Sidebar -->
            <div class="w-64 bg-white border-r overflow-y-auto overflow-x-hidden sticky top-16 h-[calc(100vh-4rem)]">
                @include('layouts.sidebar')
            </div>

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto p-4 bg-gray-100">
                {{ $slot }}
            </main>
        </div>
    </div>
    </body>
</html>
