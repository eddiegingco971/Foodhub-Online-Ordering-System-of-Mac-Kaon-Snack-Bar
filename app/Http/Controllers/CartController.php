<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::get();
        return view('customer.cart.index', compact('carts'));
    }

    public function list()
    {
        $carts = Cart::get();
        return view('admin.cart.cartList', compact('carts'));
    }

    public function addCart(Request $request){
        $request->validate([
           'product_id' => 'required',
           'customer_id' => 'required',
           'price' => 'required',
           'quantity' => 'required',
           'total_amount' => 'required',
           'status' => 'required|string',
       ]);

       Cart::create([
           'product_id' => $request->product_id,
           'customer_id' => auth()->user()->id,
           'price' => $request->price,
           'quantity' => $request->quantity,
           'total_amount' => $request->total_amount,
           'status' => $request->status,
        ]);

        return redirect('/customer')->with('status', 'Added Product Successfully');
   }
}
