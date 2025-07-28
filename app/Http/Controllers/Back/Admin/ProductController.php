<?php

namespace App\Http\Controllers\Back\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $products = Product::with('category')
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('sku', 'like', '%' . $search . '%');
            })
            // ->latest()
            ->orderBy('id', 'asc') // ganti dari ->latest() menjadi ->orderBy('id', 'asc')
            ->paginate(10);

        return view('back.admin.product.index', compact('products', 'search'));
    }

    public function show(Product $product)
    {
        return view('back.admin.product.show', compact('product'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('back.admin.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'sku' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        $product = Product::create([
            'name' => $request->name,
            'sku' => $request->sku,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $imagePath,
        ]);


        // Upload images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $path = $img->store('products', 'public');
                $product->images()->create(['image' => $path]);
            }
        }

        // Simpan fitur
        $features = collect($request->input('feature_keys', []))
            ->combine($request->input('feature_values', []))
            ->filter();

        $product->features = $features;
        $product->download_url = $request->input('download_url');
        $product->save();


        return redirect()->route('back.admin.product.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        $prevProductId = Product::where('id', '<', $product->id)->max('id');
        $nextProductId = Product::where('id', '>', $product->id)->min('id');

        return view('back.admin.product.edit', compact('product', 'categories', 'prevProductId', 'nextProductId'));
        // return view('back.admin.product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'sku' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('products', 'public');
        //     $product->image = $imagePath;
        // }

        // Upload images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $path = $img->store('products', 'public');
                $product->images()->create(['image' => $path]);
            }
        }

        // Simpan fitur
        $features = collect($request->input('feature_keys', []))
            ->combine($request->input('feature_values', []))
            ->filter();

        $product->features = $features;
        $product->download_url = $request->input('download_url');
        // $product->save();

        $product->update([
            'name' => $request->name,
            'sku' => $request->sku,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $product->image,
        ]);

        // return redirect()->route('back.admin.product.index')->with('success', 'Produk berhasil diperbarui.');
        return redirect()->route('back.admin.product.edit', $product->id)->with('success', 'Produk berhasil diperbarui.');

    }

    public function destroy(Product $product)
    {
        if ($product->image && \Storage::disk('public')->exists($product->image)) {
            \Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('back.admin.product.index')->with('success', 'Produk berhasil dihapus.');
    }
}
