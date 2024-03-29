<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $category_id = $request->input('category_id');

        $query = Product::query();

        if ($category_id) {
            $query->where('category_id', $category_id);
        }

        $products = $query->with('category')->get();

        $categories = Category::all();

        return view('products.index', [
            'products' => $products,
            'categories' => $categories,
            'selectedCategory' => $categories->firstWhere('id', $category_id),
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('products.create', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {

        if (!$request->name || !$request->image || !$request->price || !$request->quantity || !$request->category_id) {
            return redirect('/products/create')->with('error', 'Porfavor llena los campos.');
        }

        Product::create([
            'name' => $request->name,
            'image' => $request->image,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
        ]);

        return redirect('/')->with('success', 'Producto creado.');
    }

    public function filter(Request $request)
    {
        $category_id = $request->input('category_id');

        $query = Product::query();

        if ($category_id) {
            $query->where('category_id', $category_id);
        }

        $products = $query->with('category')->get();

        if ($products->isEmpty()) {
            return view('components._empty');
        }

        return view('components._products', [
            'products' => $products,
        ]);
    }

    public function delete(Request $request)
    {
        Product::where('id', $request->id)->delete();

        return redirect('/')->with('success', 'Producto eliminado 🗑️.');
    }
}
