<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.product.create');
        // $request->validate([
        //     'product_photo' => 'required|string',
        //     'product_name' => 'required|string',
        //     'quantity' => 'required|numeric',
        //     'price' => 'required|string',
        // ]);

        // Product::create([
        //     'product_photo'=> $request->product_photo,
        //     'product_name'=> $request->product_name,
        //     'quantity'=> $request->quantity,
        //     'price'=> $request->price,
        // ]);

        // return redirect('/product')->with('status', 'Added Product Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $products = new Product;
        $products->product_name = $request->input('product_name');
        $products->quantity = $request->input('quantity');
        $products->price = $request->input('price');
       
        if($request->hasFile('product_photo')){
  
          $file = $request->file('product_photo');
          $extention = $file->getClientOriginalExtension();
          $filename = time().'.'. $extention;
          $file->move('dist/img/', $filename);
          $products->product_photo = $filename;
        
        }
  
        $products->save();
     
       
        return redirect('/product')->with('status', 'Product Added Successfully!');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
