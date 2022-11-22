<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

class CartController extends Controller
{
    public $quantity = 1;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function index()
    // {
    //     $carts = DB::table('carts')->where('user_id', auth()->user()->id)->get();
    //     return view('user.cart.index', compact('carts'));
    // }




    public function addCart(Request $request){

    //     $request->validate([
    //        'product_id' => 'required',
    //        'user_id' => 'required',
    //        'price' => 'required',
    //        'quantity' => 'required',
    //        'total_amount' => 'required',
    //        'status' => 'required',
    //    ]);
    // $products = DB::table('products')->where('status', 'active')->get();
        Cart::with(['products'])->create([
            'product_id' => $request->product_id,
            'user_id' => auth()->user()->id,
        //    'user_id' => $request->user_id,
            'quantity' => $request->quantity,
            'total_amount' =>  $request->price*$request->quantity,
            'status' => $request->status,
        ]);

       if(Cart::where('user_id', auth()->user()->id)->with('products' , 'product_id')->exists()) {
            return back()->with('error', 'Product is already Added');
       }else{

            return back()->with('status', 'Added Product Successfully');
       }

   }

   public function deleteCart($id)
   {
       $carts = Cart::find($id);
       $carts->delete();
       return redirect()->back()->with('status', 'Remove Product from Successfully');
   }
}
