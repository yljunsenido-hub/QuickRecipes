<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white h-screen dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto p-4">
                    
                    <!-- Back Button -->
                    <a href="{{ route('admin.manageRecipes') }}" 
                       class="inline-block mb-4 text-sm bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        ← Back
                    </a>    

                    <!-- Recipe Detail Table -->
                    <table class="min-w-full border border-gray-300 text-sm bg-white">
                        <tbody>
                            <tr class="border-b hover:bg-gray-50">
                                <th class="text-lg py-2 px-4 text-left bg-gray-100 w-40">Recipe ID</th>
                                <td class="text-lg py-2 px-4">{{ $recipe->id }}</td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <th class="text-lg py-2 px-4 text-left bg-gray-100 w-40">Recipe Name</th>
                                <td class="text-lg py-2 px-4">{{ $recipe->recipe_name }}</td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <th class="text-lg py-2 px-4 text-left bg-gray-100">Category</th>
                                <td class="text-lg py-2 px-4">{{ $recipe->category }}</td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <th class="text-lg py-2 px-4 text-left bg-gray-100">Ingredient</th>
                                <td class="text-lg py-2 px-4">{{ $recipe->ingredient }}</td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <th class="text-lg py-2 px-4 text-left bg-gray-100">Instructions</th>
                                <td class="text-lg py-2 px-4">{{ $recipe->instructions }}</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <th class="text-lg py-2 px-4 text-left bg-gray-100">Cook Time</th>
                                <td class="text-lg py-2 px-4">{{ $recipe->cook_time }}</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>        
        </div>
    </div>
</x-app-layout>
