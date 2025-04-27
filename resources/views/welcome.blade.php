<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
    </head>
    <body class="h-screen w-screen bg-cover bg-center" style="background-image: url('/images/background.jpg');">
        <div class="h-full w-full bg-black/50 flex items-center justify-center">
            <div class="flex flex-col md:flex-row w-11/12 md:w-8/12 lg:w-6/12 bg-white/20 rounded-lg p-8 backdrop-blur-sm">
            <!-- Left Section -->
            <div class="w-full md:w-1/2 mb-8 md:mb-0 md:pr-6 text-white">
                <h1 class="text-4xl font-bold mb-4">Welcome Back</h1>
                <p class="mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <div class="flex space-x-4">
                <a href="#"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/facebook-new.png"/></a>
                <a href="#"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/twitter--v1.png"/></a>
                <a href="#"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/instagram-new.png"/></a>
                <a href="#"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/youtube-play.png"/></a>
                </div>
            </div>

            <!-- Right Section (Form) -->
            <div class="w-full md:w-1/2 bg-white/20 p-6 rounded-lg">
                <h2 class="text-2xl font-semibold text-white mb-6">Sign in</h2>
                <form class="flex flex-col space-y-2">
                <input type="email" placeholder="Email Address" class="p-3 rounded bg-white/80 focus:outline-none">
                <input type="password" placeholder="Password" class="p-3 rounded bg-white/80 focus:outline-none">
                <div class="flex items-center space-x-2 text-white">
                    <input type="checkbox" id="remember" class="accent-orange-500">
                    <label for="remember">Remember Me</label>
                </div>
                <button class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">Login</button>
                <button class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">Sign Up</button>
                
                <a href="#" class="text-sm text-white hover:underline text-center">Lost your password?</a>
                <p class="text-xs text-white text-center mt-4">
                    By clicking on "Sign in now" you agree to<br>
                    <a href="#" class="underline">Terms of Service</a> | <a href="#" class="underline">Privacy Policy</a>
                </p>
                </form>
            </div>

            </div>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
