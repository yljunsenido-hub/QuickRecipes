<?php

namespace App\Http\Controllers;

use App\Models\ManageRecipe;
use Illuminate\Http\Request;

class ManageRecipeController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'recipe_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'ingredient' => 'required|string',
            'instructions' => 'required|string',
            'cook_time' => 'nullable|string',
        ]);

        ManageRecipe::create($data);

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
        ]);

        $recipe->update($data);

        return redirect()->back()->with('success', 'Recipe updated successfully!');
    }

    // Deleting Recipe base on their ID
    public function destroy($id)
    {
        $deleteRecipe = ManageRecipe::find($id);
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
