<?php

namespace App\Livewire\Checkout;

use Livewire\Component;

class CheckoutSuccess extends Component
{
    public function render()
    {
        return view('livewire.checkout.checkout-success')->layout('layouts.app');
    }
}
