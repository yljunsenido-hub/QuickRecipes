<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query', 'pasta');

        $response = Http::get('https://api.spoonacular.com/recipes/complexSearch', [
            'apiKey' => env('SPOONACULAR_API_KEY'),
            'query' => $query,
            'number' => 6,
        ]);

        $recipes = $response->json();

        return view('user.recipes', compact('recipes', 'query'));
    }
}
