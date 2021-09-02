<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::redirect('/','/home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/add-to-cart/{product}', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add')->middleware('auth');

Route::get('/cart.index', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index')->middleware('auth');

Route::get('/cart/remove/{itemId}', [App\Http\Controllers\CartController::class, 'removeItem'])->name('cart.remove')->middleware('auth');

//view, naziv funkcije u kontroleru, ime rute
//Dodaj u kosaricu ne radi ako nisi registriran
//Moguce maknuti middleware->auth ili zahtijevati registraciju
Route::get('/cart/update/{itemId}', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update')->middleware('auth');

Route::get('/cart/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('cart.checkout')->middleware('auth');

Route::resource('/orders', 'App\Http\Controllers\OrderController')->middleware('auth');


Route::resource('/shops', 'App\Http\Controllers\ShopController');

Route::get('/my-shops', [App\Http\Controllers\ShopController::class, 'show'])->name('my-shops');

Route::get('/my-products', [App\Http\Controllers\ProductController::class, 'myproducts'])->name('my-products');

Route::resource('/products', 'App\Http\Controllers\ProductController');


Route::get('/receipt/{order}', [App\Http\Controllers\PdfController::class, 'create'])->name('print');

Route::get('/filterby', [App\Http\Controllers\ProductController::class, 'orderby'])->name('products.filterby');

Route::get('/section/{no}', [App\Http\Controllers\ProductController::class, 'section'])->name('section');

Route::get('/shop-products/{shopid}', [App\Http\Controllers\ShopController::class, 'showproducts'])->name('shops.show-products');













