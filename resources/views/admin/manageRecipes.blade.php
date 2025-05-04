<x-app-layout>
    //hehh
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white h-screen dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <p>This is Admin Manage Recipes</p>
                </div>

                <div class="flex justify-end p-2 px-6 ">
                    <button class="text-sm bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Add Recipe</button>
                </div>

                <div class="container mx-auto p-4">
                <table class="min-w-full border border-gray-300 text-sm bg-white">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="py-2 px-4 border-b w-16 text-center">ID</th>
                        <th class="py-2 px-4 border-b text-left w-1/3">Recipe Name</th>
                        <th class="py-2 px-4 border-b text-left w-1/4">Category</th>
                        <th class="py-2 px-4 border-b text-left w-1/3">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($recipes as $recipe)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b text-center">$recipe->id</td>
                        <td class="py-2 px-4 border-b">$recipe->recipe_name</td>
                        <td class="py-2 px-4 border-b">$recipe->category</td>
                        <td class="py-2 px-4 border-b space-x-2">
                        <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</button>
                        <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Update</button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
