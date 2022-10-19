<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function list()
    {
        $users = User::get();
        return view('admin.user.userList', compact('users'));
    }

    public function index()
    {
    
        $products = DB::table('products')->get();
        $sliders = DB::table('sliders')->get();
        return view('user', compact('products','sliders'));
    }

    public function userOrder(){
        $orders = Order::get();
        return view('user.user-order.index', compact('orders'));
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/user')->with('status', 'User Deleted Successfully!');
    }
}
