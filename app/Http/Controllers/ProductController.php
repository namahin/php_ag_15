<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.products', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {

        // Store a newly created product
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return "Product created successfully.";
    }

    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, string $id)
    {
        // update a product
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return "Product updated successfully.";
    }

    public function destroy(string $id)
    {
        // Delete product
        $product = Product::findOrFail($id);
        $product->delete();

        return "Product deleted successfully.";
    }
}
