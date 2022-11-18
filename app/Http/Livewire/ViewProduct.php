<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ViewProduct extends Component
{
    public $productId;
    public $product, $product_photo, $product_name, $description, $price, $status, $category_id;

    // public function loadProducts(){
    //     $products = Product::find('id', $productId);
    //     return compact('products');

    // }

    public function mount(){
        $product = Product::find($this->productId);
        $this->product_photo = $product->product_photo;
        $this->product_name = $product->product_name;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->category_id = $product->category_id;
    }

    // public function getProductProperty(){
    //     return Product::find($this->productId);
    // }

    public function render()
    {
        $products=Product::get();
        return view('livewire.view-product');
        // return view('livewire.view-product', $this->loadProducts());
    }
}
