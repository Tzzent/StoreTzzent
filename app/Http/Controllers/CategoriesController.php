<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', [
            'categories' => $categories,
        ]);
    }

    public function create(Request $request)
    {
        if (!$request->name) {
            return redirect('/categories')->with('error', 'Porfavor llena el campo.');
        }

        Category::create([
            'name' => $request->name,
        ]);

        return redirect('/categories')->with('success', 'Categoria creada.');
    }

    public function delete(Request $request)
    {
        Category::where('id', $request->id)->delete();

        return redirect('/categories')->with('success', 'Categoria eliminada 🗑️.');
    }
}
