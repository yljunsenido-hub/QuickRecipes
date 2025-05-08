<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManageRecipe extends Model
{
    protected $table = 'manage_recipe';
    
    protected $fillable = [
        'recipe_name', 'category', 'ingredient', 'instructions', 'cook_time', 'recipe_image'
    ];
}
