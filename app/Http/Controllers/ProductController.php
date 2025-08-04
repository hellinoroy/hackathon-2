<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'ingredient' => 'required|string',
            'quantity' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        $validatedData['image_path'] = $imagePath;
        $product = Product::create($validatedData);
        return response()->json($product, 201);
    }

    public function show(Product $product)
    {
        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit() {}

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'ingredient' => 'sometimes|string',
            'quantity' => 'sometimes|integer|min:0',
            'price' => 'sometimes|numeric|min:0',
            'category_id' => 'sometimes|exists:categories,id',
            'image' => 'sometimes|image',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image_path) {
                Storage::disk('public')->delete($product->image_path);
            }

            $imagePath = $request->file('image')->store('products', 'public');
            $validatedData['image_path'] = $imagePath;
        }

        $product->update($validatedData);

        // \Log::info('Validated Data:', $validatedData);
        // \Log::info('Has image?', ['hasFile' => $request->hasFile('image')]);

        return response()->json($product);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }
}
