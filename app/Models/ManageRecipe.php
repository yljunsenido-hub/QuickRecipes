<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManageRecipe extends Model
{
    protected $fillable = [
        'recipe_name', 'category', 'ingredient', 'instructions', 'cook_time'
    ];
}
