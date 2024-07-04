<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PageController as DashboardPageController;
use App\Http\Controllers\Dashboard\ProductaddController;
use App\Http\Controllers\Dashboard\UserController as DashboardUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\Admin\ProductController as ProductControllerSigle;

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

// / Dashbords  
// Route::post('/dashboard/add-product/update', [ProductaddController::class, 'update'])->name('dashboard.update');

//products
Route::get('/dashboard/index',function(){
    return view('dashboard.index');
})->name('dashboard.index');
Route::get('/dashboard/add-product', [ProductaddController::class, 'index'])->name('dashboard.add-product');
Route::get('/dashboard/productlist', [ProductaddController::class, 'show'])->name('dashboard.show');


Route::post('/dashboard/add-product/store', [ProductaddController::class, 'store'])->name('dashboard.store');

Route::get('/dashboard/add-product/{id}', [ProductaddController::class, 'edit'])->name('dashboard.edit');

Route::post('/dashboard/add-product/update/{id}', [ProductaddController::class, 'update'])->name('dashboard.update');
Route::delete('/dashboard/add-product/destroy/{id}', [ProductaddController::class, 'destroy'])->name('dashboard.destroy');
//category
Route::get('/dashboard/category',[CategoryController::class,'index'])->name('category.index');
Route::post('/dashboard/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/dashboard/category/add',[CategoryController::class,'add'])->name('category.add');

// users
Route::get('/dashboard/allusers',[DashboardUserController::class,'index'])->name('users.index');
Route::get('/dashboard/add-new-user',[DashboardUserController::class,'add'])->name('add-new-user');

Route::get('/dashboard/alluser',[DashboardUserController::class,'create'])->name('users.create');
Route::get('/dashboard/users/{id}/edit', [DashboardUserController::class, 'edit'])->name('users.edit');
Route::post('/dashboard/users/{id}', [DashboardUserController::class, 'update'])->name('users.update');
Route::delete('/dashboard/users/{id}', [DashboardUserController::class, 'destroy'])->name('users.destroy');

//dashpord pages
Route::get('/dashboard/{page}', [DashboardPageController::class, 'index'])->name('dashboard.page');


// Home page
Route::get('/',[HomeController::class,'index'])->name('home');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'store'])->name('cart.store');
Route::post('/cart/{cartItem}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/cart/update', [CartController::class,'update'])->name('cart.update');

Route::get('products/single/{id}', [ProductControllerSigle::class, 'index'])->name('products.single');
Route::get('search', [ProductControllerSigle::class, 'search'])->name('products.search'); 
Route::get('products/latest', [ProductControllerSigle::class, 'showLatestProduct'])->name('latest');
Route::get('products/most-viewed', [ProductControllerSigle::class, 'showMostViewedProducts'])->name('most_viewed');
Route::get('products/create', [ProductControllerSigle::class, 'create'])->name('create');
Route::post('prodcts/store', [ProductControllerSigle::class, 'store'])->name('store');
Route::get('products/{id}/edit', [ProductControllerSigle::class, 'edit'])->name('edit');
Route::put('products/{id}/update', [ProductControllerSigle::class, 'update'])->name('update');
Route::delete('products/{id}/delte', [ProductControllerSigle::class, 'destroy'])->name('destroy');


//reviews
Route::post('/reviews/store', [ReviewController::class, 'store'])->name('reviews.store2');



// Cart routes


//wishlist
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::post('/wishlist', [WishlistController::class, 'store'])->name('wishlist.store');
Route::delete('/wishlist/{id}', [WishlistController::class, 'destroy'])->name('wishlist.destroy');



// User registration and authentication routes
Route::get('/registration', [UserController::class, 'index'])->name('registration');
Route::post('/register', [UserController::class, 'create'])->name('register');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/verify', [UserController::class, 'showVerificationForm'])->name('verification.notice');
Route::post('/verify', [UserController::class, 'verify'])->name('verification.verify');

Route::get('password/forgot', [PasswordResetController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('password/email', [PasswordResetController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [PasswordResetController::class, 'reset'])->name('password.update');

// Fallback route for 404
Route::get('/{page}', [PageController::class, 'index'])->name('page');
