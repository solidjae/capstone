<?php

use App\Models\Recipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can  register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [RecipesController::class, 'index']);

Route::get('/recipes/create', [RecipesController::class, 'create']);

Route::post('/recipes', [RecipesController::class, 'store']);

Route::delete('/recipes/{recipes}', [RecipesController::class, 'destroy']);

Route::get('/recipes/{recipes}', [RecipesController::class, 'show']);

Route::get('/recipes/{recipes}/edit', [RecipesController::class, 'edit']);

Route::put('/recipes/{recipes}', [RecipesController::class, 'update']);

