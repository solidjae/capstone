<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index() {
        return view('recipes.index', [
            'recipes' => Recipes::latest()->filter(request(['ingredient', 'search']))->get()
        ]);
    }

    public function show(Recipes $recipes) {
        return view('recipes.show', [
            'recipes' => $recipes
        ]);
    }

    public function create() {
        return view('recipes.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'ingredients' => 'required',
            'review' => 'required',
            'link' => 'required'
        ]);

        Recipes::create($formFields);

        return redirect('/');
    }
    public function edit (Recipes $recipes) {
        return view ('recipes.edit', ['recipes' => $recipes]);
    }

    public function update(Request $request, Recipes $recipes) {
        $formFields = $request->validate([
            'title' => 'required',
            'ingredients' => 'required',
            'review' => 'required',
            'link' => 'required'
        ]);

        $recipes->update($formFields);

        return redirect('/');
    }

    public function delete(Recipes $recipes) {
        $recipes->delete();
        return redirect('/');
    }
}
