<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FrontProductController extends Controller
{
    public function index(Request $request)
    {
        // Segment ke-2 setelah /category/{slug?}
        $slug = $request->segment(2);

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

        // (Tetapkan grouping yang kamu punya saat ini)
        $products = $productQuery
            ->paginate(12)
            ->withQueryString();

        // Ambil sub-group products seperti existing-mu
        $groupedProducts = Product::whereNotNull('group_product')
            ->select('group_product')
            ->distinct()
            ->pluck('group_product');

        $subGroups = Product::whereIn('group_product', $groupedProducts)
            ->orderBy('group_product')
            ->get()
            ->groupBy('group_product');

        return view('produk', [
            'products'       => $products,
            'subGroups'      => $subGroups,
            'categories'     => $categories,
            'activeCategory' => $activeCategory,
        ]);
    }


    public function showInCategory($slugcategory, $slugproduct)
    {
        $category = \App\Models\Category::where('slug', $slugcategory)->firstOrFail();
        $product = \App\Models\Product::where('slug', $slugproduct)
            ->where('category_id', $category->id)
            ->firstOrFail();

        return view('detail_produk', compact('product', 'category'));
    }
}
