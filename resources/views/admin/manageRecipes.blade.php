<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white h-auto dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            
            <!-- Recipe Cards Container -->
            <div class="flex flex-wrap justify-start gap-8 px-10 mt-10">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="relative w-64 mt-16">
                        <!-- Overlapping Image -->
                        <div class="absolute -top-10 left-1/2 transform -translate-x-1/2 z-10">
                            <img src="/images/adminProf.png" alt="Special Salad Chicken" class="w-32 h-32 object-cover rounded-full border-4 border-white shadow-md">
                        </div>

                        <!-- Card Content -->
                        <div class="bg-white rounded-3xl shadow-md pt-24 overflow-hidden">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-900 text-center">Special Salad Chicken</h3>

                                <div class="flex justify-center items-center space-x-1 text-yellow-400 mt-2">
                                    <!-- Static 4 stars filled, 1 empty -->
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
                                <span class="text-sm text-gray-500">20 mins</span>
                                <button class="bg-green-500 text-white text-sm px-3 py-1.5 rounded hover:bg-green-600">View Recipe</button>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            





                <div x-data="{ showModal: false }" class="relative">
                    <!-- Trigger Button -->
                    <div class="flex justify-end p-2 px-6 mt-6">
                        <button @click="showModal = true" class="text-sm bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Add Recipe</button>
                    </div>

                    @if(session('success'))
                        <div 
                            x-data="{ show: true }" 
                            x-init="setTimeout(() => show = false, 2000)" 
                            x-show="show" 
                            class="text-green-800 p-2 rounded mt-2"
                        >
                        <div class="bg-green-300 text-green-800 p-2 px-4 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

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
                
            <div x-data="{ showDetails: false, selectedRecipe: {} }">    
                <div class="container mx-auto p-6">
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

                                <!-- Action Buttons -->
                                <td class="py-2 px-4 border-b text-center">
                                    <div class="flex justify-center items-center gap-2">
                                        <!-- View Button -->
                                        <button @click="selectedRecipe = {{ $recipe }}, showDetails = true"
                                            class="bg-blue-500 text-white px-4 py-1.5 rounded hover:bg-blue-600 transition">
                                            View
                                        </button>

                                        <!-- Update Modal with Button -->
                                        <div x-data="{ showUpdateModal: false }" class="relative">
                                            <button @click="showUpdateModal = true"
                                                class="bg-yellow-500 text-white px-4 py-1.5 rounded hover:bg-yellow-600 transition">
                                                Update
                                            </button>

                                            <!-- Modal -->
                                            <div x-show="showUpdateModal"
                                                class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                                                x-transition>
                                                <div @click.away="showUpdateModal = false"
                                                    class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg"
                                                    x-transition>

                                                    <h2 class="text-start text-xl font-semibold mb-4">Update Recipe</h2>

                                                    <!-- Form -->
                                                    <form method="POST" action="{{ route('recipes.update', $recipe->id) }}">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="mb-4">
                                                            <label class="text-start block text-sm font-medium">Recipe Name</label>
                                                            <input type="text" name="recipe_name" value="{{ $recipe->recipe_name }}"
                                                                class="w-full border px-3 py-2 rounded" required>
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="text-start block text-sm font-medium">Category</label>
                                                            <input type="text" name="category" value="{{ $recipe->category }}"
                                                                class="w-full border px-3 py-2 rounded" required>
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="text-start block text-sm font-medium">Ingredients</label>
                                                            <input type="text" name="ingredient" value="{{ $recipe->ingredient }}"
                                                                class="w-full border px-3 py-2 rounded" required>
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="text-start block text-sm font-medium">Instructions</label>
                                                            <input type="text" name="instructions" value="{{ $recipe->instructions }}"
                                                                class="w-full border px-3 py-2 rounded" required>
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="text-start block text-sm font-medium">Cook Time</label>
                                                            <input type="text" name="cook_time" value="{{ $recipe->cook_time }}"
                                                                class="w-full border px-3 py-2 rounded" required>
                                                        </div>

                                                        <div class="flex justify-end gap-2">
                                                            <button type="submit"
                                                                class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                                                                Save
                                                            </button>
                                                            <button type="button" @click="showUpdateModal = false"
                                                                class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Delete Button -->
                                        <div x-data="{ showDeleteConfirm: false }">
                                            <button @click="showDeleteConfirm = true"
                                                class="bg-red-500 text-white px-4 py-1.5 rounded hover:bg-red-600 transition">
                                                Delete
                                            </button>

                                            <!-- Confirmation Modal -->
                                            <div x-show="showDeleteConfirm"
                                                class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                                                x-transition>
                                                
                                                <div @click.away="showDeleteConfirm = false"
                                                    class="bg-white p-6 rounded shadow-md w-full max-w-sm text-center">
                                                    <p class="text-lg font-medium mb-4">Are you sure you want to delete this recipe?</p>
                                                    <div class="flex justify-center space-x-4">
                                                        <form method="POST" action="{{ route('recipes.destroy', $recipe->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">
                                                                Yes, Delete
                                                            </button>
                                                        </form>
                                                        <button @click="showDeleteConfirm = false"
                                                            class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500 transition">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                
            
                <div class="container mx-auto px-6 py-4" x-show="showDetails">
                    <table class="min-w-full border border-gray-300 text-sm bg-white">
                        <tbody>
                            <tr class="border-b hover:bg-gray-50">
                                <th class="py-2 px-4 text-left bg-gray-100 w-40">Recipe ID</th>
                                <td class="py-2 px-4" x-text="selectedRecipe.id"></td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <th class="py-2 px-4 text-left bg-gray-100">Recipe Name</th>
                                <td class="py-2 px-4" x-text="selectedRecipe.recipe_name"></td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <th class="py-2 px-4 text-left bg-gray-100">Category</th>
                                <td class="py-2 px-4" x-text="selectedRecipe.category"></td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <th class="py-2 px-4 text-left bg-gray-100">Ingredient</th>
                                <td class="py-2 px-4" x-text="selectedRecipe.ingredient"></td>
                            </tr>
                            <tr class="border-b hover:bg-gray-50">
                                <th class="py-2 px-4 text-left bg-gray-100">Instructions</th>
                                <td class="py-2 px-4" x-text="selectedRecipe.instructions"></td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <th class="py-2 px-4 text-left bg-gray-100">Cook Time</th>
                                <td class="py-2 px-4" x-text="selectedRecipe.cook_time"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
