<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LocationController;
use App\Http\Controllers\API\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('provinces', 'API\LocationController@provinces')->name('api-provinces');
// Route::get('regencies/{provinces_id}', 'API\LocationController@regencies')->name('api-regencies');

Route::get('/provinces', [LocationController::class, 'provinces'])->name('api-provinces');
Route::get('/regencies/{provinces_id}', [LocationController::class, 'regencies'])->name('api-regencies');
Route::get('/districts/{regencies_id}', [LocationController::class, 'districts'])->name('api-districts');
Route::get('/villages/{districts_id}', [LocationController::class, 'villages'])->name('api-villages');

Route::get('/categories', [CategoryController::class, 'categories'])->name('api-categories');
Route::get('/subcategories/{category_id}', [CategoryController::class, 'subcategories'])->name('api-subcategories');


// Route::get('/provinces', [App\Http\Controllers\RajaOngkirController::class, 'getProvinces']);
// Route::get('/cities/{id}', [App\Http\Controllers\RajaOngkirController::class, 'getCities']);
// Route::post('/checkOngkir', [App\Http\Controllers\RajaOngkirController::class, 'checkOngkir']);