<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class ProductList extends Component
{
    public function render()
    {
        return view('livewire.product.product-list',[
            'products' => Product::all(),]);
    }
}
