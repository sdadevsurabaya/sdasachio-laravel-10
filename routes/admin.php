<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Back\Admin\DashboardController;
use App\Http\Controllers\Back\Admin\CategoryController;


Route::prefix('/back/admin')->name('admin.dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});

