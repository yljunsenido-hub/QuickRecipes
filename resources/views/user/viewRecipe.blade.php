<x-app-layout>
    <div class="p-6 bg-gray-100 min-h-screen">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Left: Main Content Area -->
            <div class="md:col-span-3 bg-white rounded-lg shadow p-4">
                <div class="h-96 bg-gray-200 rounded">
                    Main Content
                    <div class="py-2">
        @php
            $ingredients = json_decode($viewRecipes->ingredient);
            $instruction = json_decode($viewRecipes->instructions);
        @endphp
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-[#F4F2EE] h-auto py-12 overflow-hidden shadow-sm sm:rounded-lg">

            <h1>{{ $viewRecipes->recipe_name }}</h1>
            <p>Category: {{ $viewRecipes->category }}</p>
            <p>Cook Time: {{ $viewRecipes->cook_taime }}</p>
            <h2 class="text-lg font-semibold mt-5">Ingredients:</h2>
            <ul class="list-disc list-inside">
                @foreach ($ingredients as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
            <h2 class="text-lg font-semibold mt-5">Instructions:</h2>
            <ul class="list-disc list-inside">
                @foreach ($instruction as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
            </div>
        </div>
    </div>
                </div>
                    
                <div class="mt-4 bg-gray-300 rounded p-4">
                    <h2 class="text-lg font-semibold">Reviews</h2>
                    <div class="h-24 bg-gray-100 rounded mt-2">Review Section</div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="space-y-4">
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="text-lg font-semibold mb-2">Viewers Overview</h2>
                    <div class="h-32 bg-gray-200 rounded">Data Box</div>
                </div>

                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="text-lg font-semibold mb-2">Similar Menu</h2>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="h-24 bg-gray-200 rounded"></div>
                        <div class="h-24 bg-gray-200 rounded"></div>
                        <div class="h-24 bg-gray-200 rounded"></div>
                        <div class="h-24 bg-gray-200 rounded"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
