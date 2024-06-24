<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WishlistController;

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

// Home page
Route::get('/',[HomeController::class,'index'])->name('home');


// Products routes
// Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');
//
/// url me
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/single-product/{id}', [ProductController::class, 'index'])->name('products.single');
Route::post('/reviews/store', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/latest-product', [PageController::class, 'showLatestProduct'])->name('latest-product');
// url admin
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/admin/products/store', [ProductController::class, 'store'])->name('products.store');
Route::put('/admin/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
//



// Cart routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{cartItem}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::get('/cart/clear', [CartController::class,'clear'])->name('cart.clear');
Route::post('/cart/update', [CartController::class,'update'])->name('cart.update');
//wishlist
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::post('/wishlist', [WishlistController::class, 'store'])->name('wishlist.store');
Route::delete('/wishlist/{id}', [WishlistController::class, 'destroy'])->name('wishlist.destroy');


// User registration and authentication routes
Route::get('/registration', [UserController::class, 'index'])->name('registration');
Route::post('/register', [UserController::class, 'create'])->name('register');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [UserController::class, 'login'])->name('login');




// Fallback route for 404
Route::get('/{page}', [PageController::class, 'index'])->name('page');

