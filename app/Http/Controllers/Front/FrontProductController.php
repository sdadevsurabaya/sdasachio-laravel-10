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
        // Ambil produk dengan pagination
        $products = Product::with('images')
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

        return view('produk', compact('products', 'subGroups'));
    }


    public function showInCategory($slugcategory, $slugproduct)
    {
        $category = \App\Models\Category::where('slug', $slugcategory)->firstOrFail();
        $product = \App\Models\Product::where('slug', $slugproduct)->where('category_id', $category->id)->firstOrFail();

        return view('produk', compact('product', 'category'));
    }
}
