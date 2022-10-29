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
        return view('base', compact('products','sliders', 'orders', 'users'));
    }

    public function profileSetting(){
        $users = User::get();
        // $users = DB::table('users')->where('user_id', auth()->user()->id)->get();

        return view('layouts.profiling.index', compact('users'));
    }
}
