<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ManageRecipeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard']);
        Route::get('/admin/manageRecipes', [AdminController::class, 'AdminManageRecipes']);
        Route::post('/admin/manageRecipes', [ManageRecipeController::class, 'store'])->name('recipes.store');
        Route::get('/admin/manageRecipes', [ManageRecipeController::class, 'index'])->name('admin.manageRecipes');
        Route::put('/admin/manageRecipes/update/{id}', [ManageRecipeController::class, 'update'])->name('recipes.update');

    });

    Route::group(['middleware' => ['role:user']], function () {
        Route::get('/user/dashboard', [UserController::class, 'UserDashboard']);
        Route::get('/user/recipes', [UserController::class, 'UserRecipes']);
    });
});



require __DIR__.'/auth.php';
