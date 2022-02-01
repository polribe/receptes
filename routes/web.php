<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipes',[RecipeController::class, 'index'])->name('recipe.index');
Route::get('/recipes/create',[RecipeController::class, 'create'])->name('recipe.create');
Route::get('/recipes/{recipe}',[RecipeController::class, 'show'])->name('recipe.show');
Route::post('/recipes/store',[RecipeController::class, 'store'])->name('recipe.store');
Route::get('/categories',[CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/{category}',[CategoryController::class, 'show'])->name('category.show');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
