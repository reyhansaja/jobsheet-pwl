<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage'])->name('products.category.food-beverage');
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth'])->name('products.category.beauty-health');
    Route::get('/home-care', [ProductController::class, 'homeCare'])->name('products.category.home-care');
    Route::get('/baby-kid', [ProductController::class, 'babyKid'])->name('products.category.baby-kid');
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'profile'])->name('user.profile');

Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
