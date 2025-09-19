<?php
namespace App\Http\Controllers\Back\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search       = $request->query('search');
        $categorySlug = $request->query('category');

        $categories = Category::where('status', true)->get();

        $products = Product::with('category')
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('sku', 'like', '%' . $search . '%');
            })
            ->when($categorySlug, function ($query, $categorySlug) {
                $query->whereHas('category', function ($q) use ($categorySlug) {
                    $q->where('slug', $categorySlug);
                });
            })
            ->orderBy('order', 'asc')
            // ->orderBy('id', 'asc')
            ->paginate(10);

        return view('back.admin.product.index', compact('products', 'search', 'categories'));
    }

    public function show(Product $product)
    {
        return view('back.admin.product.show', compact('product'));
    }

    public function create()
    {
        $categories = Category::where('status', true)->get();
        $maxOrder   = Product::max('order') + 1;
        return view('back.admin.product.create', compact('categories', 'maxOrder'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|string',
            'category_id'  => 'required|exists:categories,id',
            'description'  => 'nullable|string',
            'sku'          => 'nullable|string',
            'image'        => 'nullable|image|max:2048',
            'order'        => 'nullable',
            'feature_keys' => 'nullable',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        // Simpan fitur
        $features = collect($request->input('feature_keys', []))
            ->combine($request->input('feature_values', []))
            ->filter();
        // dd($request->sku);
        $product = Product::create([
            'name'         => $request->name,
            'sku'          => Str::slug($request->sku),
            'category_id'  => $request->category_id,
            'description'  => $request->description,
            'image'        => $imagePath,
            'order'        => $request->order,
            'feature_keys' => $features,
            'slug'         => Str::slug($request->sku),
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $path = $img->store('products', 'public');
                $product->images()->create(['image' => $path]);
            }
        }

        $product->download_url = $request->input('download_url');
        $product->save();

        return redirect()->route('back.admin.product.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Product $product)
    {
        $categories    = Category::where('status', true)->get();
        $maxOrder      = Product::max('order') + 1;
        $prevProductId = Product::where('id', '<', $product->id)->max('id');
        $nextProductId = Product::where('id', '>', $product->id)->min('id');
        return view('back.admin.product.edit', compact('product', 'categories', 'prevProductId', 'nextProductId', 'maxOrder'));
    }

    public function update(Request $request, Product $product)
    {
        // Deteksi apakah ini update dari inline edit (hanya field tertentu)
        if ($request->hasAny(['name', 'sku', 'description', 'status', 'order']) && ! $request->has('category_id')) {
            $request->validate([
                'name'        => 'sometimes|required|string|max:255',
                'sku'         => 'sometimes|required|string|max:255|unique:products,sku,' . $product->id,
                'description' => 'sometimes|nullable|string',
                'status'      => 'sometimes|required|boolean',
                'order'       => 'sometimes|required',
            ]);

            $product->update($request->only(['name', 'sku', 'description', 'status', 'order']));
            return response()->json(['success' => true]);
        }

        // Update dari form edit lengkap
        $request->validate([
            'name'            => 'required|string|max:255',
            'category_id'     => 'required|exists:categories,id',
            'description'     => 'nullable|string',
            'sku'             => 'nullable|string|max:255|unique:products,sku,' . $product->id,
            'download_url'    => 'nullable|string',
            'images'          => 'nullable|array',
            'images.*'        => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'delete_images'   => 'nullable|array',
            'delete_images.*' => 'integer|exists:product_images,id',
            'status'          => 'required|boolean',
            'order'           => 'nullable',
            'feature_keys'    => 'nullable',
        ]);

        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $imageToDelete = ProductImage::find($imageId);
                if ($imageToDelete) {
                    $filePath = public_path('storage/' . $imageToDelete->image);
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
                    $imageToDelete->delete();
                }
            }
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $imageName       = time() . '_' . $img->hashName();
                $destinationPath = public_path('storage/products');
                $img->move($destinationPath, $imageName);
                $dbPath = 'products/' . $imageName;
                $product->images()->create(['image' => $dbPath]);
            }
        }

        $features = collect($request->input('feature_keys', []))
            ->combine($request->input('feature_values', []))
            ->filter();

        $productData['features'] = $features;
        // dd($productData['features']);

        $product->update($productData);

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
