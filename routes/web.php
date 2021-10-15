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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.front.index');
});

Route::get('/category', function () {
    return view('pages.front.category');
});

Route::get('/product', function () {
    return view('pages.front.product');
});

Route::get('/store', function () {
    return view('pages.front.store');
});

Route::get('/checkout', function () {
    return view('pages.front.checkout');
});

Route::get('/cart', function () {
    return view('pages.front.cart');
});

Route::get('/find', function () {
    return view('pages.front.find');
});

Route::get('/profile', function () {
    return view('pages.front.profile.index');
});

Route::get('/profile/chat', function () {
    return view('pages.front.profile.chat');
});

Route::get('/profile/list-transactions', function () {
    return view('pages.front.profile.listTransaction');
});

Route::get('/profile/review', function () {
    return view('pages.front.profile.review');
});

Route::get('/profile/discution', function () {
    return view('pages.front.profile.discution');
});

Route::get('/official', function () {
    return view('pages.front.official');
});

Route::get('/seller', function () {
    return view('pages.seller.index');
});

Route::get('/seller/products', function () {
    return view('pages.seller.product.index');
});

Route::get('/seller/product-create', function () {
    return view('pages.seller.product.create');
});

Route::get('/seller/discutions', function () {
    return view('pages.seller.discutions');
});

Route::get('/seller/reviews', function () {
    return view('pages.seller.reviews');
});

Route::get('/sell', function () {
    return view('layouts.sell');
});

Route::get('/seller/sales', function () {
    return view('pages.seller.sales');
});

Route::get('/seller/chats', function () {
    return view('pages.seller.chats');
});


