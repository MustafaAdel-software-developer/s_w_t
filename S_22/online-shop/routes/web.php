<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/add-product', [HomeController::class, 'add_product']);
Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/cart',[CartController::class, 'cart'] );
Route::get('/checkout',[CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/addOrder',[CheckoutController::class, 'store'] );
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::post('/contact',[ContactController::class,'sendMessage']);
// Route::get('/cart', [OrdersController::class, 'cart'])->name('cart');
Route::get('/productServices', [OrdersController::class, 'productServices']);
Route::get('/orders/{id}/show', [OrderDetailsController::class, 'show']);
Route::resource('/orders', OrderDetailsController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'can:is_admin'])->prefix('/admin')->group(function () {
    Route::resource('products', ProductsController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('orders', OrderDetailsController::class);
    Route::get('/orders/{id}/show', [OrderDetailsController::class, 'show']);

    Route::resource('/orders', OrderDetailsController::class);
   
});

Route::get('/incQuantity', [CartController::class,'incQuantity']);
Route::get('/decQuantity', [CartController::class,'decQuantity']);
Route::get('/remove', [CartController::class,'remove']);