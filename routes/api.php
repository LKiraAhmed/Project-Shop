<?php

use App\Http\Controllers\CartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WishlistController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//reviews
Route::post('/reviews/store', [ReviewController::class, 'store'])->name('reviews.store');
//cart     
Route::post('/cart/updateCart', [CartController::class, 'updateCart'])->name('cart.updateCart');//updateCart update quantity
Route::post('/cart/addtocart', [CartController::class, 'addToCart'])->name('cart.addToCart');
//wishlist
Route::post('/wishlist/addwishlist', [WishlistController::class, 'addwishlist'])->name('wishlist.addwishlist');// create wishlist api
