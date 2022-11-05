<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $sliders = Slider::where('status', 'active')->get();
        $orders = DB::table('orders')->where('quantity')->get();
        $categories = DB::table('categories')->get();
        $carts = DB::table('carts')->where('user_id')->get();
        return view('base', compact('products','sliders', 'orders', 'users', 'categories', 'carts'));
    }

    public function productSearch(Request $request){
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $products=Product::orwhere('product_name','like','%'.$request->search.'%')
                    ->orderBy('id','DESC')
                    ->paginate('9');
        return view('search-product')->with('products',$products)->with('recent_products',$recent_products);
    }
}
