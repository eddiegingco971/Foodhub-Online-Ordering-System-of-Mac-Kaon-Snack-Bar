<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class UserCheckout extends Component
{
    public $carts, $totalProductAmount;

    public function totalProductAmount(){
        $this->carts = Cart::where('user_id', auth()->user()->id)->get();

        foreach ($this->carts as $cart){
            $this->totalProductAmount += $cart->products->price * $cart->quantity;
        }
        return $this->totalProductAmount;

    }
    public function render()
    {
        $this->totalProductAmount = $this->totalProductAmount();
        return view('livewire.user-checkout', [
            'totalProductAmount' => $this->totalProductAmount
        ]);
    }
}
