<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
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
                <form method="POST" action="{{ route('login') }}" class="flex flex-col space-y-2">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
        
                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                        <x-primary-button>
                                {{ __('Log in') }}
                        </x-primary-button>
                        <a href="{{ route('register') }}" class="text-center bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">
                            Register
                        </a>
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            
                        </div>
                    <p class="text-xs text-white text-center mt-4">
                        By clicking on "Sign in now" you agree to<br>
                        <a href="#" class="underline">Terms of Service</a> | <a href="#" class="underline">Privacy Policy</a>
                    </p>
                </form>
            </div>

            </div>
        </div>
    <form > 
</x-guest-layout>
