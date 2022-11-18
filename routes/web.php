<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('base');
// });
Route::get('/', [SiteController::class, 'index'])->name('base');
Route::post('/product/search', [SiteController::class, 'productSearch'])->name('product.search');
// Route::get('/all-product', [SiteController::class, 'allProduct']);
Route::get('/collections', [SiteController::class, 'collectionCategory']);
Route::get('/collections/{cat_name}', [SiteController::class, 'specificProduct']);
Route::get('/select/{product}', [SiteController::class, 'viewProduct']);
Route::get('/about', [SiteController::class, 'about']);



Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function (){

Route::get('/profile', [ProfileController::class, 'profileSetting']);
Route::post('/profile-create', [ProfileController::class, 'store']);
Route::get('/edit-profile/{id}', [ProfileController::class, 'edit']);
Route::put('/update-profile/{id}', [ProfileController::class, 'update']);

Route::group(['middleware' => ['auth', 'admin']], function (){
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/slider', [SliderController::class,'index'])->name('sliders');
    Route::post('/slider-create', [SliderController::class, 'store']);
    Route::get('/edit-slider/{id}', [SliderController::class, 'edit']);
    Route::put('/update-slider/{id}', [SliderController::class, 'update']);
    Route::get('/delete-slider/{id}', [SliderController::class, 'destroy']);

    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/product-create', [ProductController::class, 'create']);
    Route::post('/product-create', [ProductController::class, 'store']);

    Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
    Route::put('/update-product/{id}', [ProductController::class, 'update']);
    Route::get('/delete-product/{id}', [ProductController::class, 'destroy']);


    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    // Route::get('/category-create', [CategoryController::class, 'create']);
    Route::post('/category-create', [CategoryController::class, 'store']);
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
    Route::put('/update-category/{id}', [CategoryController::class, 'update']);
    Route::get('/delete-category/{id}', [CategoryController::class, 'destroy']);

    Route::get('/order', [OrderController::class, 'index'])->name('order');
    Route::get('/delete-order/{id}', [OrderController::class, 'destroy']);


    Route::get('/calendar', [HomeController::class, 'calendar'])->name('calendar');

    Route::get('/user-list', [UserController::class, 'list']);
    Route::get('/delete-user/{id}', [UserController::class, 'destroy']);

    Route::get('/cart-list', [HomeController::class, 'cartList']);
});

Route::group(['middleware' => ['auth', 'staff']], function (){
    Route::get('/staff', [StaffController::class, 'index'])->name('staff');

});

Route::group(['middleware' => ['auth', 'user']], function (){
    Route::get('/user-cart', [UserController::class, 'index'])->name('user');

    Route::get('/user-order', [UserController::class, 'userOrder']);

    Route::post('/cart-create', [CartController::class, 'addCart']);
    Route::get('/edit-cart/{id}', [CartController::class, 'editCart']);
    Route::get('/delete-cart/{id}', [CartController::class, 'deleteCart']);

    // Route::get('/user-cart/{id}', [CartController::class, 'index'])->name('cart');
});

});
