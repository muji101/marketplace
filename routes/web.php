<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/user/reg', [AuthController::class, 'reg'])->name('user.reg');
Route::get('/register', [AuthController::class, 'register'])->name('register');


Route::middleware(['auth'])->group(function () {
    
// Admin
    Route::get('/admin', function () {
        return view('pages.dashboard.index');
    });
    
    Route::get('/admin/users', [AuthController::class, 'index'])->name('user.index');
    Route::get('/user/create', [AuthController::class, 'create'])->name('user.create');
    Route::post('/user/store', [AuthController::class, 'store'])->name('user.store');
    Route::get('/user/{id}', [AuthController::class, 'show'])->name('user.show');
    Route::get('/user/edit/{id}', [AuthController::class, 'edit'])->name('user.edit');
    Route::post('/user/update/{id}', [AuthController::class, 'update'])->name('user.update');
    Route::delete('/user/delete/{id}', [AuthController::class, 'delete'])->name('user.delete');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    Route::get('/admin/products', function () {
        return view('pages.dashboard.product.index');
    });
    Route::get('/admin/product-create', function () {
        return view('pages.dashboard.product.create');
    });
    Route::get('/admin/product-detail', function () {
        return view('pages.dashboard.product.detail');
    });

    Route::get('/admin/categories', function () {
        return view('pages.dashboard.category.index');
    });
    Route::get('/admin/category-create', function () {
        return view('pages.dashboard.category.create');
    });

    Route::get('/admin/galleries', function () {
        return view('pages.dashboard.gallery.index');
    });
    Route::get('/admin/gallery-create', function () {
        return view('pages.dashboard.gallery.create');
    });

    // Route::get('/admin/users', function () {
    //     return view('pages.dashboard.user.index');
    // });
    // Route::get('/admin/user-create', function () {
    //     return view('pages.dashboard.user.create');
    // });
    // Route::get('/admin/user-detail', function () {
    //     return view('pages.dashboard.user.detail');
    // });

    Route::get('/admin/stores', function () {
        return view('pages.dashboard.store.index');
    });
    Route::get('/admin/store-create', function () {
        return view('pages.dashboard.store.create');
    });
    Route::get('/admin/store-detail', function () {
        return view('pages.dashboard.store.detail');
    });

    Route::get('/admin/promotions', function () {
        return view('pages.dashboard.promotion.index');
    });
    Route::get('/admin/promotion-create', function () {
        return view('pages.dashboard.promotion.create');
    });

    Route::get('/admin/transactions', function () {
        return view('pages.dashboard.transaction.index');
    });
    Route::get('/admin/transaction-detail', function () {
        return view('pages.dashboard.transaction.detail');
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
