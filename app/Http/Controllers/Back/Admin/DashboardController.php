<?php
namespace App\Http\Controllers\Back\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        // $products = Product::with('category')
        //     ->when($search, function ($query, $search) {
        //         $query->where('name', 'like', '%' . $search . '%')
        //             ->orWhere('sku', 'like', '%' . $search . '%');
        //     })
        //     // ->latest()
        //     ->orderBy('id', 'asc') // ganti dari ->latest() menjadi ->orderBy('id', 'asc')
        //     ->paginate(10);

        return view('back.dashboard');

        // return view('back.admin.product.index', compact('products', 'search'));
    }


}
