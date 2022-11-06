<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        // $carts = User::where('user_id', 'id')->get();
        $carts = DB::table('carts')->where('user_id', 'id')->get();
        return view('base', compact('products','sliders', 'orders', 'users', 'categories', 'carts'));
    }

    public function productSearch(Request $request){
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $products=Product::orwhere('product_name','like','%'.$request->search.'%')
                    ->orderBy('id','DESC')
                    ->simplePaginate('9');
        return view('search-product')->with('products',$products)->with('recent_products',$recent_products);
    }

    public function collectionCategory()
    {
        $categories = Category::where('status','active')->simplePaginate(4);
        return view('collections.category.index',compact('categories'));
    }

    public function specificProduct($cat_name)
    {
        $categories = Category::where('category_name', $cat_name)->first();

        if($categories){
            $products = $categories->products()->simplePaginate(4);
            return view('collections.product.index', compact('products','categories'));
        }else{
            return redirect()->back();
        }
    }
}
