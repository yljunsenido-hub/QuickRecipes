<aside class="w-64 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 hidden sm:block">
    <div class="h-full py-5 px-3 space-y-6">
        <nav class=" space-y-2">
            @php $user = auth()->user(); @endphp
            <!-- User Sidebar -->
            @if($user->role == 'user')
            <div class="relative group">
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top">
                    <div class=" space-y-2 p-2">
                        <!-- Image above the Dashboard link -->
                        <img src="{{ asset('images/userProf.png') }}" alt="Dashboard Image" class="w-22 h-24 mx-auto mb-10 rounded-full">
                        <!-- Sidebar Menus -->
                        <div class="rounded-lg bg-gray-100 hover:bg-orange-500 border-gray border-2">
                            <a href="{{ url('/user/dashboard') }}" class="text-md text-gray-600 block py-3 px-4 rounded transition-colors duration-200 hover:text-white {{ request()->is('/user/dashboard') }}">
                                <img src="{{ asset('images/dashboardSVG.png') }}" alt="Recipes Icon" class="inline-block mr-4 h-6 w-6">
                                Dashboard
                            </a>
                        </div>

                        <div class="rounded-lg bg-gray-100 hover:bg-orange-500 border-gray border-2">
                            <a href="{{ url('/user/dashboard') }}" class="text-md text-gray-600 block py-3 px-4 rounded transition-colors duration-200 hover:text-white {{ request()->is('/user/dashboard') }}">
                                <img src="{{ asset('images/foodSVG.png') }}" alt="Recipes Icon" class="inline-block mr-4 h-6 w-6">
                                Recipes
                            </a>
                        </div>


                        <div class="rounded-lg bg-gray-100 hover:bg-orange-500 border-gray border-2">
                            <a href="{{ url('/user/dashboard') }}" class="text-md text-gray-600 block py-3 px-4 rounded transition-colors duration-200 hover:text-white {{ request()->is('/user/dashboard') }}">
                                <img src="{{ asset('images/favoriteSVG.png') }}" alt="Recipes Icon" class="inline-block mr-4 h-6 w-6">
                                Favorites
                            </a>
                        </div>

                        <div class="rounded-lg bg-gray-100 hover:bg-orange-500 border-gray border-2">
                            <a href="{{ url('/user/dashboard') }}" class="text-md text-gray-600 block py-3 px-4 rounded transition-colors duration-200 hover:text-white {{ request()->is('/user/dashboard') }}">
                                <img src="{{ asset('images/mealPlannerSVG.png') }}" alt="Recipes Icon" class="inline-block mr-4 h-6 w-6">
                                Meal Planner
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Admin Sidebar -->
            @elseif($user->role == 'admin')
            <div class="relative group">
                <div class="dropdown-menu overflow-hidden transition-all duration-300 ease-in-out origin-top ">
                    <div class=" space-y-2 p-2">
                        <!-- Sidebar Menus -->
                        <div class="rounded-lg bg-gray-100 hover:bg-orange-500 border-gray border-2">
                            <a href="{{ url('/admin/dashboard') }}" class="text-sm text-gray-600 block py-3 px-4 rounded transition-colors duration-200 hover:text-white {{ request()->is('/admin/dashboard') }}">
                                <img src="{{ asset('images/dashboardSVG.png') }}" alt="Recipes Icon" class="inline-block mr-4 h-6 w-6">
                                Dashboard
                            </a>
                        </div>

                        <div class="rounded-lg bg-gray-100 hover:bg-orange-500 border-gray border-2">
                            <a href="{{ url('/admin/dashboard') }}" class="text-sm text-gray-600 block py-3 px-4 rounded transition-colors duration-200 hover:text-white {{ request()->is('/admin/dashboard') }}">
                                <img src="{{ asset('images/foodSVG.png') }}" alt="Recipes Icon" class="inline-block mr-4 h-6 w-6">
                                Manage Recipes
                            </a>
                        </div>


                        <div class="rounded-lg bg-gray-100 hover:bg-orange-500 border-gray border-2">
                            <a href="{{ url('/admin/dashboard') }}" class="text-sm text-gray-600 block py-3 px-4 rounded transition-colors duration-200 hover:text-white {{ request()->is('/admin/dashboard') }}">
                                <img src="{{ asset('images/manageCategoriesSVG.png') }}" alt="Recipes Icon" class="inline-block mr-4 h-6 w-6">
                                Manage Categories
                            </a>
                        </div>

                        <div class="rounded-lg bg-gray-100 hover:bg-orange-500 border-gray border-2">
                            <a href="{{ url('/admin/dashboard') }}" class="text-sm text-gray-600 block py-3 px-4 rounded transition-colors duration-200 hover:text-white {{ request()->is('/admin/dashboard') }}">
                                <img src="{{ asset('images/manageIngredientsSVG.png') }}" alt="Recipes Icon" class="inline-block mr-4 h-6 w-6">
                                Manage Ingredients
                            </a>
                        </div>
                        <div class="rounded-lg bg-gray-100 hover:bg-orange-500 border-gray border-2">
                            <a href="{{ url('/admin/dashboard') }}" class="text-sm text-gray-600 block py-3 px-4 rounded transition-colors duration-200 hover:text-white {{ request()->is('/admin/dashboard') }}">
                                <img src="{{ asset('images/comments_reviewsSVG.png') }}" alt="Recipes Icon" class="inline-block mr-4 h-6 w-6">
                                Comments/Reviews
                            </a>
                        </div>
                        <div class="rounded-lg bg-gray-100 hover:bg-orange-500 border-gray border-2">
                            <a href="{{ url('/admin/dashboard') }}" class="text-sm text-gray-600 block py-3 px-4 rounded transition-colors duration-200 hover:text-white {{ request()->is('/admin/dashboard') }}">
                                <img src="{{ asset('images/reports_feedbackSVG.png') }}" alt="Recipes Icon" class="inline-block mr-4 h-6 w-6">
                                Reports/Feedbacks
                            </a>
                        </div>
                        <div class="rounded-lg bg-gray-100 hover:bg-orange-500 border-gray border-2">
                            <a href="{{ url('/admin/dashboard') }}" class="text-sm text-gray-600 block py-3 px-4 rounded transition-colors duration-200 hover:text-white {{ request()->is('/admin/dashboard') }}">
                                <img src="{{ asset('images/letterManagementSVG.png') }}" alt="Recipes Icon" class="inline-block mr-4 h-6 w-6">
                                Letter Management
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </nav>

    </div>
</aside>
