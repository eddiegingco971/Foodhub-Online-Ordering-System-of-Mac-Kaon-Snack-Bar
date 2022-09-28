<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Customer\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Staff\StaffController;
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

Route::get('/', function () {
    return view('base');
});

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'admin']], function (){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
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
    Route::get('/calendar', [HomeController::class, 'calendar'])->name('calendar');
 
});

Route::group(['middleware' => ['auth', 'staff']], function (){
    Route::get('/staff', [StaffController::class, 'index'])->name('staff');
 
});

Route::group(['middleware' => ['auth', 'customer']], function (){
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
 
});