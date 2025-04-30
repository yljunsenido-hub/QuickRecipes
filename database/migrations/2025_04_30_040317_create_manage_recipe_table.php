<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('manage_recipe', function (Blueprint $table) {
            $table->id();
            $table->string('recipe_name');
            $table->string('category');
            $table->text('ingredient');
            $table->text('instructions');
            $table->string('cook_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manage_recipe');
    }
};
