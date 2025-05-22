<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            @php
                $ingredients = json_decode($viewRecipes->ingredient);
            @endphp

            <div class="bg-[#F4F2EE] h-auto py-12 overflow-hidden shadow-sm sm:rounded-lg">

            <h1>{{ $viewRecipes->recipe_name }}</h1>
            <p>Category: {{ $viewRecipes->category }}</p>
            <p>Cook Time: {{ $viewRecipes->cook_time }}</p>
            <h2 class="text-lg font-semibold">Ingredients:</h2>
            <ul class="list-disc list-inside">
                @foreach ($ingredients as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
            <p>Instructions: {{$viewRecipes->instructions}}<p>
            <p>Hi</p>
            </div>
        </div>
    </div>
</x-app-layout>