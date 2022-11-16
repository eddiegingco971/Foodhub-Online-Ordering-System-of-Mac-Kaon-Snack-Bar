<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ViewProduct extends Component
{
    public $productId, $product_photo, $product_name, $description, $price, $status, $category_id;

    // public function loadProducts(){
    //     $products = Product::find('id', $productId);
    //     return compact('products');

    // }

    public function mount(){
        $this->product_photo = $this->product_photo;
        $this->product_name = $this->product_name;
        $this->description = $this->description;
        $this->category_id = $this->category_id;

    }

    public function getIdProperty($productId){
        return Product::find($this->productId);

    }

    public function render()
    {
        $products=Product::get();
        return view('livewire.view-product');
        // return view('livewire.view-product', $this->loadProducts());
    }
}
