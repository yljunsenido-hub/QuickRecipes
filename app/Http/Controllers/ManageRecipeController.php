<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\ManageRecipe;
use Illuminate\Http\Request;

class ManageRecipeController extends Controller
{

    // Creating Recipes and Storing in Database
    public function store(Request $request)
    {
        $request->validate([
            'recipe_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'ingredient' => 'required|string',
            'instructions' => 'required|string',
            'cook_time' => 'nullable|string',
            'recipe_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Process ingredients into array
        $ingredient = array_filter(array_map('trim', explode("\n", $request->ingredient)));
        $instructions = array_filter(array_map('trim', explode("\n", $request->instructions)));

        // Handle the image upload
        $imagePath = null;
        if ($request->hasFile('recipe_image')) {
            $imagePath = $request->file('recipe_image')->store('recipes', 'public');
        }

        ManageRecipe::create([
            'recipe_name' => $request->recipe_name,
            'category' => $request->category,
            'ingredient' => json_encode($ingredient), // or just join with newline if storing as plain text
            'instructions' => json_encode($instructions),
            'cook_time' => $request->cook_time,
            'recipe_image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Recipe added!');
    }


    public function index()
    {   
        // Fetch all recipes from the database
        $recipes = ManageRecipe::latest()->paginate(3);  // Retrieve latest recipes
        return view('admin.manageRecipes', compact('recipes'));
    }


    // This is for the view (Searching for the ID of recipe then show all the datas in the table)
    public function RecipeViews($id)
    {
        $recipe = ManageRecipe::findOrFail($id);
    }

    // Updating the Recipe Informations based on their ID
    public function update(Request $request, $id)
    {
        $recipe = ManageRecipe::findOrFail($id);

        $data = $request->validate([
            'recipe_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'ingredient' => 'required|string',
            'instructions' => 'required|string',
            'cook_time' => 'nullable|string',
            'recipe_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('recipe_image')) {
            // Delete old image if it exists
            if ($recipe->recipe_image && Storage::disk('public')->exists($recipe->recipe_image)) {
                Storage::disk('public')->delete($recipe->recipe_image);
            }

            // Store new image
            $data['recipe_image'] = $request->file('recipe_image')->store('recipes', 'public');
        }

        // Update recipe with new data
        $recipe->update($data);

        return redirect()->back()->with('success', 'Recipe updated!');
    }

    // Deleting Recipe base on their ID
    public function destroy($id)
    {
        $deleteRecipe = ManageRecipe::findOrFail($id);
        
        if ($deleteRecipe->recipe_image && Storage::disk('public')->exists($deleteRecipe->recipe_image)) {
            Storage::disk('public')->delete($deleteRecipe->recipe_image);
        }

        $deleteRecipe->delete();

        return redirect()->back()->with('success', 'Recipe deleted successfully.');
    }









    // This is for User functions

    public function recipesIndex()
    {
        $userRecipes = ManageRecipe::latest()->get();
        return view('user.recipes', compact('userRecipes'));
    }

    public function viewRecipesIndex($id)
    {
        $viewRecipes = ManageRecipe::findOrFail($id);
        return view('user.viewRecipe', compact('viewRecipes'));
    }
}
//add