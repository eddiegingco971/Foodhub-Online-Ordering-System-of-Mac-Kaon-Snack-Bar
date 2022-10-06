<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
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
        $customers = Customer::get();
        return view('admin.customer.customerList', compact('customers'));
    }

    public function index()
    {
    
        $products = DB::table('products')->get();
        $sliders = DB::table('sliders')->get();
        return view('customer', compact('products','sliders'));
    }

    public function customerOrder(){
        return view('customer.customer-order.index');
    }

    public function destroy($id)
    {
        $customers = Customer::find($id);
        $customers->delete();
        return redirect('/customer')->with('status', 'Customer Deleted Successfully!');
    }
}
