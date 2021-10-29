<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Shop;
use App\Models\User;


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

Route::get('/shop/{shop}', function ($shop) {
    $shop = Shop::where('link', $shop)->firstOrFail();
    
    return view('shop')
            ->with('shop', $shop);
});

Route::get('/shop/{shop}/{product}', function ($shop, $product) {
    $product = Product::where('link', $product)->firstOrFail();

    return view('product')
            ->with('product', $product);
});


Route::post('/search', function (Request $request){
    $query = $request->input('query');
    $products = Product::where('name', 'LIKE', '%' . $query . '%')->get();
    
    return view('search')
            ->with([
                'products' => $products,
                'query' => Str::title($query)
            ]);
});


Route::get('/cart', function () {
    return view('cart');
});

Route::get('/cart/show', function (Request $request) {
    
    return response()->json(session('cart'));
});

Route::post('/cart/add', function (Request $request) {
    (!$request->session()->has('cart')) ? $cart = new App\Models\Cart : $cart = session('cart');
        
        $cart->addProduct($request);
        session(['cart' => $cart]);
        
        return redirect()->back();
});

Route::post('/cart/remove', function (Request $request) {
    if($request->session()->has('cart'))
        session('cart')->removeProduct($request->input('product_id'));
    
    return redirect()->back();
});


Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/login',  function () {
    return view('auth.login');
});

Route::post('/login',  function (Request $request) {
    $credentials = ['email' => $request->input('email'), 'password' => $request->input('password')];

    $result = auth()->attempt($credentials);

    return redirect('/');
});

Route::get('/register',  function () {
    return view('auth.register');
});

Route::post('/register',  function (Request $request) {

    $user = new User;
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password'));
    $user->save();

    auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]); 
    
    return redirect('/');
});

Route::post('/logout', function () {
    auth()->logout();

    return redirect('/');
});

Route::post('/checkout', function (Request $request) {
    $var = 'hey';

    return view('complete')
        ->with('message', 'Your order has been successfully placed');
});