<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white h-screen dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <p>This is Admin Manage Recipes</p>
                </div>

                <div x-data="{ showModal: false }" class="relative">

                <!-- Trigger Button -->
                <div class="flex justify-end p-2 px-6 ">
                    <button @click="showModal = true" class="text-sm bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Add Recipe</button>
                </div>

                <!-- Modal Overlay -->
                <div x-show="showModal"
                    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                    x-transition>
                
                    <div
                        @click.away="showModal = false"
                        class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg"
                        x-transition>

                        <h2 class="text-xl font-semibold mb-4">Add New Recipe</h2>

                        <!-- Form -->
                        <form method="POST" action="{{route('recipes.store')}}">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-sm font-medium">Recipe Name</label>
                                <input type="text" name="recipe_name" class="w-full border px-3 py-2 rounded" required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium">Category</label>
                                <input type="text" name="category" class="w-full border px-3 py-2 rounded" required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium">Ingredients</label>
                                <input type="text" name="ingredient" class="w-full border px-3 py-2 rounded" required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium">Instructions</label>
                                <input type="text" name="instructions" class="w-full border px-3 py-2 rounded" required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium">Cook Time</label>
                                <input type="text" name="cook_time" class="w-full border px-3 py-2 rounded" required>
                            </div>
                            <div class="flex justify-end space-x-2">                        
                                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Save</button>
                                <button type="button" @click="showModal = false" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container mx-auto p-4">
            <table class="min-w-full border border-gray-300 text-sm bg-white">
                <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border-b w-16 text-center">ID</th>
                    <th class="py-2 px-4 border-b text-left w-1/3">Recipe Name</th>
                    <th class="py-2 px-4 border-b text-left w-1/4">Category</th>
                    <th class="py-2 px-4 border-b text-left w-1/3 text-center">Actions</th>
                </tr>
                </thead>
                    <tbody>
                        @foreach ($recipes as $recipe)
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border-b text-center">{{ $recipe->id }}</td>
                                <td class="py-2 px-4 border-b">{{ $recipe->recipe_name }}</td>
                                <td class="py-2 px-4 border-b">{{ $recipe->category }}</td>
                                <td class="py-2 px-4 border-b text-center space-x-2">
                                    <a href="{{ route('recipes.views', $recipe->id) }}" class="bg-blue-500 text-white px-3 py-1.5 rounded hover:bg-blue-600">View</a>
                                    <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Update</button>
                                    <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination Links -->
                <div class="mt-4">
                    {{ $recipes->links() }}
                </div>  
            </div>
        </div>
    </div>
</div>
</x-app-layout>
