<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontCategoryController;
use App\Http\Controllers\Front\FrontProductController;
use App\Http\Controllers\Back\Admin\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/category', [FrontCategoryController::class, 'index'])->name('category.index');

// Route untuk detail kategori
Route::get('/category/{slugcategory}', [FrontCategoryController::class, 'show'])->name('category.show');

// Route untuk detail produk dalam kategori
Route::get('/category/{slugcategory}/{slugproduct}', [FrontProductController::class, 'showInCategory'])->name('product.showInCategory');

Route::get('/product', [FrontProductController::class, 'index'])->name('product.index');

Route::prefix('back/admin')->name('back.admin.')->group(function () {
    Route::resource('product', ProductController::class);
});
