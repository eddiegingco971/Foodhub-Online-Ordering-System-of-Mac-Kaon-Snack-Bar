<?php

use App\Http\Controllers\Customer\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Middleware\AdminMiddleware;
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
    return view('welcome');
});

Auth::routes(['verify' => true]);

// Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'admin']], function (){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
 
});

Route::group(['middleware' => ['auth', 'staff']], function (){
    Route::get('/staff', [StaffController::class, 'index'])->name('staff');
 
});

Route::group(['middleware' => ['auth', 'customer']], function (){
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
 
});

// Route::get('/staff', [StaffController::class, 'index'])->name('staff');
// Route::get('/customer', [CustomerController::class, 'index'])->name('customer');


//Route for mailing


Route::get('/email',  function(){
    Mail::to('gingcoeddie971@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();

});

// Route::group(['middleware' => 'auth'],function(){

//     Route::group(['middleware' => 'staff'],function (){
//         Route::get('/home',[HomeController::class,'index'])->name('home');
//     });

//     Route::group(['middleware' => 'staff'],function (){
//         Route::get('/staff', [StaffController::class, 'index'])->name('staff');
//     });

//     Route::group(['middleware' => 'customer'],function (){
//         Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
//     });

// });