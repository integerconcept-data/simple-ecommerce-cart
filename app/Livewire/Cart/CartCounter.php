<?php

namespace App\Livewire\Cart;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartCounter extends Component
{
    protected $listeners = ['cartUpdated' => '$refresh'];

    public function render()
    {
        $count = 0;

        if (Auth::check()) {
            $cart = Cart::where('user_id', Auth::id())->first();
            $count = $cart?->items()->count();
        }
        return view('livewire.cart.cart-counter', compact('count'));
    }
}
