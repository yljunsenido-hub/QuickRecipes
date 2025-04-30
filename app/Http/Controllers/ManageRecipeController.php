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

        Recipe::create($data);

        return redirect()->back()->with('success', 'Recipe added!');
    }

    public function index()
{
    // Fetch all recipes from the database
    $recipes = ManageRecipe::latest()->get();  // Retrieve latest recipes

    // Pass the recipes to the view
    return view('admin.manageRecipes', compact('recipes'));
}



}
