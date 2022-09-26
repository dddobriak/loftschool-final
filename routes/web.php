<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products = Product::paginate(6);
    $categories = Category::limit(10)->get();

    return view('welcome', compact('products', 'categories'));
});

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resources([
    'category' => CategoryController::class,
    'product' => ProductController::class,
    'order' => OrderController::class,
    'user' => UserController::class,
]);

Route::controller(CartController::class)->group(function () {
    Route::post('cart/add-product', 'addProduct')->name('cart.add');
    Route::post('cart/delete-product', 'deleteProduct')->name('cart.delete');
    Route::get('cart', 'show')->name('cart');
});

require __DIR__.'/auth.php';
