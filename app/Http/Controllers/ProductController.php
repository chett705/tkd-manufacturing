<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //frontend
    public function show()
    {
        return view('Frontend.pages.ProductPage');
    }

    //backend
   
public function index()
{
    $products = Product::latest()->paginate(15);   // បន្ថែមនេះ
    return view('Backend.products.index', compact('products'));
}
    
    public function create()
    {
        return view('Backend.products.create');
    }

    public function edit(Product $product)
    {
        return view('Backend.products.edit', compact('product'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable',
            'sizes'       => 'nullable|string',
            'colors'      => 'nullable|string',
            'packaging'   => 'nullable|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        $data = $request->all();
        $data['sizes'] = $request->filled('sizes') ? json_decode($request->sizes, true) : null;
        $data['colors'] = $request->filled('colors') ? json_decode($request->colors, true) : null;

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $data['image'] = $path;
        }

        Product::create($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Product created successfully!');
    }
public function update(Request $request, Product $product)
{
    $request->validate([
        'name'        => 'required|string|max:255',
        'description' => 'nullable',
        'sizes'       => 'nullable|string',
        'colors'      => 'nullable|string',
        'packaging'   => 'nullable|string|max:255',
        'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
    ]);

    $data = $request->all();
    $data['sizes'] = $request->filled('sizes') ? json_decode($request->sizes, true) : null;
    $data['colors'] = $request->filled('colors') ? json_decode($request->colors, true) : null;

    if ($request->hasFile('image')) {
        // Delete old image
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $path = $request->file('image')->store('products', 'public');
        $data['image'] = $path;
    }

    $product->update($data);

    return redirect()->route('admin.products.index')
                     ->with('success', 'Product updated successfully!');
}

    /**
     * Admin - Delete product
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('admin.products.index')
            ->with('success', 'Product deleted successfully!');
    }
}
