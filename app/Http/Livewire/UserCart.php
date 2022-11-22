<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class UserCart extends Component
{
    public $quantityCount = 1;
    public function loadCarts(){
        $carts = Cart::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->get();
        return compact('carts');
    }

    public function incrementQuantity(){
        if ($this->quantityCount < 10) {
            $this->quantityCount++;
        }


    }
    public function decrementQuantity(){

        if ($this->quantityCount > 1) {
            $this->quantityCount--;
        }

    }


    // public function incrementQuantity($cartId){
    //     $cart = Cart::where('id', $cartId)->firstOrFail();
    //     $this->quantityCount = $cart->quantity;
    //     $this->quantityCount++;
    //     $cart->update(['quantity' => $this->quantityCount]);
    // }
    public function render()
    {
        return view('livewire.user-cart', $this->loadCarts());
    }
}
