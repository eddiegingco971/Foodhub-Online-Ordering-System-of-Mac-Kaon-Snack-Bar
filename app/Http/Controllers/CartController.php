<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

class CartController extends Controller
{
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

        $request->validate([
           'product_id' => 'required',
           'user_id' => 'required',
           'price' => 'required',
           'quantity' => 'required',
           'total_amount' => 'required',
           'status' => 'required|string',
       ]);

       Cart::create([
           'product_id' => $request->product_id,
           'user_id' => auth()->user()->id,
           'price' => $request->price,
           'quantity' => $request->quantity,
           'total_amount' =>  $request->total_amount,
           'status' => $request->status,
        ]);

        return redirect('/user')->with('status', 'Added Product Successfully');
   }
}
