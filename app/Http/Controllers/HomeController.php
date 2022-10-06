<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        $orders = DB::table('orders')->count();
        $products = DB::table('products')->count();
        $customers = DB::table('customers')->count();
        $carts = DB::table('carts')->count();
        return view('home' ,compact('orders','products','customers','carts'));
    
    }


    public function calendar()
    {
        return view('admin.event.calendar');
    }


}
