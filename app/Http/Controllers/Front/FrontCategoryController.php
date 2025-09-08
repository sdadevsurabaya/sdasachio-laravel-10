<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FrontCategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        dump($categories[0]->name);

        return view('kategori-produk', compact('categories'));
    }

    public function show($slugcategory)
    {
        $category = Category::where('slug', $slugcategory)->firstOrFail();
        //$products = $category->products; // pastikan relasi `products()` ada di model Category
        // dd($category->id);
        // dump($products);

        // Segment ke-2 setelah /category/{slug?}
        $slug = $slugcategory;

        // Ambil kategori root (parent_id NULL), aktif saja
        $categories = Category::whereNull('parent_id')
            ->where('status', true)
            ->orderBy('order')
            ->get();

        // Jika ada slug kategori, jadikan sebagai kategori aktif
        $activeCategory = null;
        if ($slug) {
            $activeCategory = Category::where('slug', $slug)->first();
        }

        // Filter produk: semua atau per kategori aktif (+ anak-anaknya)
        $productQuery = Product::with('images');

        if ($activeCategory) {
            // Sertakan anak kategori langsung (opsional: bisa diperluas rekursif jika perlu)
            $categoryIds = collect([$activeCategory->id])
                ->merge($activeCategory->children->pluck('id'))
                ->unique()
                ->values();

            $productQuery->whereIn('category_id', $categoryIds);
        }


        // Ambil produk dengan pagination
        $products = Product::with('images')
            ->where('category_id', $category->id)
            ->whereColumn('group_product', 'id')
            ->paginate(12);

        // Ambil semua grup unik
        $groupedProducts = Product::whereNotNull('group_product')
            ->select('group_product')
            ->distinct()
            ->pluck('group_product');

        // Ambil semua produk yang termasuk dalam grup
        $subGroups = Product::whereIn('group_product', $groupedProducts)
            ->orderBy('group_product')
            ->get()
            ->groupBy('group_product');
        return view('produk', compact('category', 'products', 'subGroups', 'categories', 'activeCategory'));
    }
}
