<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class ProductList extends Component
{
    public function addToCart(Product $product)
    {
        if (! auth()->check()) {
            return redirect()->route('login');
        }

        $cart = auth()->user()->cart()->firstOrCreate();

        $cartItem = $cart->items()
            ->where('product_id', $product->id)
            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            $cart->items()->create([
                'product_id' => $product->id,
                'quantity' => 1,
            ]);
        }

        // Update cart counter
        $this->dispatch('cartUpdated');
    }
    public function render()
    {
        return view('livewire.product.product-list',[
            'products' => Product::all(),]);
    }
}
