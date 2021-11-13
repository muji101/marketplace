<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\dash\CategoryController;
use App\Http\Controllers\dash\SubCategoryController;
use App\Http\Controllers\dash\ProductController;
use App\Http\Controllers\dash\ProductGalleryController;
use App\Http\Controllers\dash\PromotionController;
use App\Http\Controllers\dash\StoreController;
use App\Http\Controllers\seller\SellerDashboardController;
use App\Http\Controllers\seller\SellerProductController;
use App\Http\Controllers\FrontProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FrontCategoryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FrontStoreController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\profile\ProfileHomeController;
use App\Http\Controllers\SubDiscussionController;
use App\Http\Controllers\profile\ProfileAddressController;
use App\Http\Controllers\profile\ProfileDiscussionController;
use App\Http\Controllers\seller\SellerDiscussionController;
use App\Http\Controllers\seller\SellerSettingController;

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

Route::post('/user/reg', [AuthController::class, 'reg'])->name('user.reg');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/product/{id}', [FrontProductController::class, 'detail'])->name('front.product-detail');

Route::get('/store/create', [FrontStoreController::class, 'create'])->name('store-create');
Route::post('/store/create', [FrontStoreController::class, 'store'])->name('store-store');
Route::get('/store/{id}', [FrontStoreController::class, 'show'])->name('store-show');

Route::get('/category', [FrontCategoryController::class, 'index'])->name('category-index');
Route::get('/category/{id}', [FrontCategoryController::class, 'show'])->name('category-show');
Route::get('/category/{id}/{subs?}', [FrontCategoryController::class, 'detail'])->name('category-detail');

Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/search/{slug}', [SearchController::class, 'searchCategory'])->name('search-category');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/{id}', [CartController::class, 'add'])->name('cart-add');
Route::delete('/cart/{id}', [CartController::class, 'delete'])->name('cart-delete');

Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');

Route::get('pay', [PayController::class, 'index'])->name('pay');

Route::resource('discussions', DiscussionController::class);
Route::resource('subdiscussions', SubDiscussionController::class);



Route::middleware(['auth'])->group(function () {
    
// Admin
    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            return view('pages.dashboard.index');
        });
        Route::get('/users', [AuthController::class, 'index'])->name('user.index');
        Route::get('/user/create', [AuthController::class, 'create'])->name('user.create');
        Route::post('/user/store', [AuthController::class, 'store'])->name('user.store');
        Route::get('/user/{id}', [AuthController::class, 'show'])->name('user.show');
        Route::get('/user/edit/{id}', [AuthController::class, 'edit'])->name('user.edit');
        Route::post('/user/update/{id}', [AuthController::class, 'update'])->name('user.update');
        Route::delete('/user/delete/{id}', [AuthController::class, 'delete'])->name('user.delete');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::resource('categories', CategoryController::class);
        Route::resource('subcategory', SubCategoryController::class);
        Route::get('/categories/{id}/create', [SubCategoryController::class, 'create'])->name('subcategory-create');
        Route::get('/categories/{cateId}/{id}', [SubCategoryController::class, 'edit'])->name('subcategory-edit');

        Route::resource('products', ProductController::class);

        Route::resource('galleries', ProductGalleryController::class);

        Route::resource('promotions', PromotionController::class);

        Route::resource('stores', StoreController::class);


        Route::get('/transactions', function () {
            return view('pages.dashboard.transaction.index');
        });
        Route::get('/transaction-detail', function () {
            return view('pages.dashboard.transaction.detail');
        });
    });
    
// Seller
    Route::prefix('/seller')->group(function () {   
        Route::get('/', [SellerDashboardController::class, 'index'])->name('seller.dashboard');

        Route::get('/products', [SellerProductController::class, 'index'] )->name('seller.product-index');
        Route::post('/products', [SellerProductController::class, 'store'] )->name('seller.product-store');
        Route::get('/products/create', [SellerProductController::class, 'create'] )->name('seller.product-create');
        // Route::post('/products/make', [SellerProductController::class, 'make'] )->name('seller.product-make');
        Route::get('/products/{id}', [SellerProductController::class, 'detail'] )->name('seller.product-detail');
        Route::post('/products/{id}', [SellerProductController::class, 'update'] )->name('seller.product-update');
        Route::delete('/products/{id}', [SellerProductController::class, 'destroy'] )->name('seller.product-delete');
        Route::post('/products/gallery/up', [SellerProductController::class, 'upload'] )->name('seller.gallery-upload');
        Route::delete('/products/gallery/{id}', [SellerProductController::class, 'delete'] )->name('seller.gallery-delete');

        Route::get('/discussion', [SellerDiscussionController::class, 'index'])->name('seller.discussion-index');

        Route::get('/setting', [SellerSettingController::class, 'index'])->name('seller.setting');
        Route::post('/setting/photo/{id}', [SellerSettingController::class, 'rubahphoto'])->name('seller.setting-photo');
        Route::post('/setting/cover/{id}', [SellerSettingController::class, 'rubahcover'])->name('seller.setting-cover');
    });
    
// profile
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileHomeController::class, 'index'])->name('profile-index');
        Route::post('/changeName/{id}', [ProfileHomeController::class, 'changeName'])->name('profile-changeName');
        Route::post('/changeBirth/{id}', [ProfileHomeController::class, 'changeBirth'])->name('profile-changeBirth');
        Route::post('/changePhoto/{id}', [ProfileHomeController::class, 'changePhoto'])->name('profile-changePhoto');
        Route::post('/changePass/{id}', [ProfileHomeController::class, 'changePass'])->name('profile-changePass');

        Route::resource('addresses', ProfileAddressController::class);
        Route::post('addresses/{id}/select', [ProfileAddressController::class, 'select'])->name('addresses.select');
        Route::post('addresses/{id}/main', [ProfileAddressController::class, 'main'])->name('addresses.main');

        Route::get('/discussion', [ProfileDiscussionController::class, 'index'])->name('profile-discussion-index');
    });

});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('auth');
});
//frontend
// Route::get('/', function () {
//     return view('pages.front.index');
// });

// Route::get('/category', function () {
//     return view('pages.front.category');
// });

// Route::get('/product', function () {
//     return view('pages.front.product');
// });

// Route::get('/store', function () {
//     return view('pages.front.store');
// });

// Route::get('/checkout', function () {
//     return view('pages.front.checkout');
// });

// Route::get('/buy-direct', function () {
//     return view('pages.front.buy-direct');
// });

// Route::get('/cart', function () {
//     return view('pages.front.cart');
// });

// Route::get('/wishlist', function () {
//     return view('pages.front.wishlist');
// });

// Route::get('/find', function () {
//     return view('pages.front.find');
// });

// Route::get('/profile', function () {
//     return view('pages.front.profile.index');
// });

// Route::get('/profile/chat', function () {
//     return view('pages.front.profile.chat');
// });

// Route::get('/profile/list-transactions', function () {
//     return view('pages.front.profile.listTransaction');
// });

// Route::get('/profile/review', function () {
//     return view('pages.front.profile.review');
// });

// Route::get('/profile/discution', function () {
//     return view('pages.front.profile.discution');
// });

// Route::get('/official', function () {
//     return view('pages.front.official');
// });

// // seller
// Route::get('/seller', function () {
//     return view('pages.seller.index');
// });

// Route::get('/seller/products', function () {
//     return view('pages.seller.product.index');
// });

// Route::get('/seller/product-create', function () {
//     return view('pages.seller.product.create');
// });

// Route::get('/seller/discutions', function () {
//     return view('pages.seller.discutions');
// });

// Route::get('/seller/reviews', function () {
//     return view('pages.seller.reviews');
// });

// Route::get('/sell', function () {
//     return view('layouts.sell');
// });

// Route::get('/seller/sales', function () {
//     return view('pages.seller.sales');
// });

// Route::get('/seller/store', function () {
//     return view('pages.seller.store');
// });

// Route::get('/seller/chats', function () {
//     return view('pages.seller.chats');
// });
