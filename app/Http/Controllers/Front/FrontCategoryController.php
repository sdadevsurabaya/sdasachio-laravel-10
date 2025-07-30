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
    public function index(Request $request) {
         $categories = Category::all();
         dump($categories[0]->name);
         return view('kategori-produk', compact('categories'));

    }

    public function show($slugcategory)
    {
        $category = Category::where('slug', $slugcategory)->firstOrFail();
        $products = $category->products; // pastikan relasi `products()` ada di model Category
        dump($category);
        dump($products);
        return view('produk',compact('category', 'products'));

    }
}
