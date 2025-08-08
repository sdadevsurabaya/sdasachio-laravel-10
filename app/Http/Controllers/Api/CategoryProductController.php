<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function show($slugcategory)
    {
        $category = Category::where('slug', $slugcategory)->firstOrFail();
        $products = Product::with('images')
            ->where('category_id', $category->id)
            ->whereColumn('group_product', 'id')
            ->paginate(12);

        $groupedProducts = Product::whereNotNull('group_product')
            ->select('group_product')
            ->distinct()
            ->pluck('group_product');

        $subGroups = Product::whereIn('group_product', $groupedProducts)
            ->orderBy('group_product')
            ->get()
            ->groupBy('group_product');

        return response()->json([
            'category' => $category,
            'products' => $products,
            'subGroups' => $subGroups
        ]);
    }
}
