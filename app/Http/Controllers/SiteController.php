<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        $products = DB::table('products')->get();
        $sliders = Slider::get();
        $orders = DB::table('orders')->where('quantity')->get();
        $categories = DB::table('categories')->get();
        $carts = DB::table('carts')->where('user_id')->get();
        return view('base', compact('products','sliders', 'orders', 'users', 'categories', 'carts'));
    }
}
