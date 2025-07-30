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
        // $products = Product::all();
        $products = Product::paginate(10);
        return view('produk', compact('products'));
    }

    public function showInCategory($slugcategory, $slugproduct)
    {
        $category = \App\Models\Category::where('slug', $slugcategory)->firstOrFail();
        $product = \App\Models\Product::where('slug', $slugproduct)->where('category_id', $category->id)->firstOrFail();

        return view('produk', compact('product', 'category'));
    }
}
