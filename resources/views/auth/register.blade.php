<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex flex-wrap">
        <!-- Left Section -->
        <div class="w-full md:w-1/2 mb-8 md:mb-0 md:pr-6 text-white">
            <h1 class="text-4xl font-bold mb-4 text-orange-500">Register!</h1>
            <p class="mb-2">Join QuickRecipes today and unlock a world of quick, delicious meals made just for you!</p>
            <div class="mb-6">
                <img src="/images/ramen2.png" alt="Ramen" class="w-full h-auto rounded-lg object-cover">
            </div>
            <div class="flex space-x-4 mt-4">
                <a href="#"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/facebook-new.png" alt="Facebook" /></a>
                <a href="#"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/twitter--v1.png" alt="Twitter" /></a>
                <a href="#"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/instagram-new.png" alt="Instagram" /></a>
                <a href="#"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/youtube-play.png" alt="YouTube" /></a>
            </div>
        </div>

        <!-- Right Section (Form) -->
        <div class="w-full md:w-1/2 bg-white/20 p-6 rounded-lg">
            <h2 class="text-center text-4xl font-semibold text-white mb-6">Register</h2>
            <form method="POST" action="{{ route('register') }}" class="flex flex-col space-y-2">
                @csrf
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Register Button -->
                <div>
                    <x-primary-button class="w-full justify-center rounded-md mt-2">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>

                <!-- Already Registered Link -->
                <div class="text-center mt-4">
                    <a class="underline text-sm text-white hover:text-gray-300" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
