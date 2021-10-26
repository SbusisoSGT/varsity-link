<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/faq', function () {
    return view('faq');
});

Route::get('/{shop}', function ($shop) {
    $shop = App\Models\Shop::where('link', $shop)->firstOrFail();
    
    return view('shop')
            ->with('shop', $shop);
});

Route::get('/{shop}/{product}', function ($shop, $product) {
    $product = App\Models\Product::where('link', $product)->firstOrFail();

    return view('product')
            ->with('product', $product);
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

