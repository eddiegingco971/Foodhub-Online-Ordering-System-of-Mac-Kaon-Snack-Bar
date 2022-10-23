<?php

namespace App\Http\Controllers;

use App\Models\Slider;
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
        return view('base', compact('products','sliders', 'orders', 'users'));
    }
}
