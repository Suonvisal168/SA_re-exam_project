<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::resource('branches', BranchController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);


Route::get('/', function () {
    return view('home');
})->name('home');
