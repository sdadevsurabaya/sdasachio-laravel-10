<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/category', function () {
    return view('kategori-produk');
});

Route::get('/product', function () {
    return view('produk');
});

Route::prefix('back/admin')->name('back.admin.')->group(function () {
    Route::resource('product', ProductController::class);
});
