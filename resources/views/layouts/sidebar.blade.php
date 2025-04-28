<aside class="w-64 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 hidden sm:block">
    <div class="h-full py-5 px-3 space-y-6">
        <nav class="mt-8 space-y-2">
            @php $user = auth()->user(); @endphp

            @if($user->role == 'user')
                <h2 class="text-s font-semibold">Operations</h2>

                <!-- Leads & Cases -->
                <div class="relative group">
                    <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top ">
                        <div class="mt-2 space-y-2 p-2">
                            <a href="{{ url('/user/dashboard') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('/user/dashboard') ? 'bg-gray-600' : '' }}">Dashboard</a>
                        </div>
                    </div>
                </div>

            @elseif($user->role == 'admin')
                <div class="relative group">
                    <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top ">
                        <div class="mt-2 space-y-2 p-2">
                            <a href="{{ url('/admin/dashboard') }}" class="block py-1.5 px-4 rounded transition-colors duration-200 hover:text-yellow-400 {{ request()->is('/admin/dashboard') ? 'bg-gray-600' : '' }}">Dashboard</a>
                        </div>
                    </div>
                </div>
            @endif
        </nav>

    </div>
</aside>
