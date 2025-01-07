<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'welcome'])->name('welcome');

Route::get('products', [ProductController::class,'index'])->name('products.index');

Route::get('products/create',[ProductController::class,'create'])->name('products.create');

Route::post('products',[ProductController::class,'store'])->name('products.store');

Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('products/{product}/edit',[ProductController::class,"edit"])->name('products.edit');

Route::match(['put', 'patch'], 'products/{product}', [ProductController::class,"update"])->name('products.update');

Route::delete('products/{product}',[ProductController::class,"destroy"])->name('products.destroy');

Auth::routes(); 

Route::get('/home', [HomeController::class, 'index'])->name('home');
