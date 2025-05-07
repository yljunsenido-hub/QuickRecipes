<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white h-auto py-12 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <!-- Horizontal Scrollable Recipe Cards -->
            <div class="overflow-x-auto px-10 mt-10 ">
                <div class="flex flex-nowrap gap-8 pb-4">
                    @foreach ($userRecipes as $userRecipe)
                        <div class="relative w-64 flex-shrink-0 mt-16">
                            <!-- Overlapping Image -->
                            <div class="absolute -top-10 left-1/2 transform -translate-x-1/2 z-10">
                                <img src="/images/adminProf.png" alt="Special Salad Chicken" class="w-32 h-32 object-cover rounded-full border-4 border-white shadow-md">
                            </div>

                            <!-- Card Content -->
                            <div class="bg-white rounded-3xl shadow-md pt-24 overflow-hidden">
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold text-gray-900 text-center">{{$userRecipe->recipe_name}}</h3>

                                    <div class="flex justify-center items-center space-x-1 text-yellow-400 mt-2">
                                        @for ($j = 1; $j <= 5; $j++)
                                            @if ($j <= 4)
                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.564-.955L10 0l2.948 5.955 6.564.955-4.756 4.635 1.122 6.545z"/></svg>
                                            @else
                                                <svg class="w-4 h-4 text-gray-300" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.564-.955L10 0l2.948 5.955 6.564.955-4.756 4.635 1.122 6.545z"/></svg>
                                            @endif
                                        @endfor
                                        <span class="text-sm text-gray-500 ml-1">(7 Reviews)</span>
                                    </div>
                                </div>

                                <div class="flex justify-between items-center px-4 py-3 border-t">
                                    <span class="text-sm text-gray-500">{{$userRecipe->cook_time}}</span>
                                    <button class="bg-green-500 text-white text-sm px-3 py-1.5 rounded hover:bg-green-600">View Recipe</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
