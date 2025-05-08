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
        Schema::table('manage_recipe', function (Blueprint $table) {
            $table->string('recipe_image')->nullable()->after('cook_time'); // or wherever you want to place it
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('manage_recipe', function (Blueprint $table) {
            $table->dropColumn('recipe_image');
        });
    }
};
