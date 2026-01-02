<?php

namespace App\Livewire\Cart;

use Livewire\Component;
use App\Models\CartItem;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Jobs\LowStockNotificationJob;

class ShoppingCart extends Component
{
    public function updateQuantity(CartItem $item, $quantity)
    {
        if ($quantity < 1) return;
        $item->update(['quantity' => $quantity]);

        // Update cart counter
        $this->dispatch('cartUpdated');
    }

    public function removeItem(CartItem $item)
    {
        $item->delete();

        // Update cart counter
        $this->dispatch('cartUpdated');
    }

     public function checkout()
    {
        $user = auth()->user();
        $cart = $user->cart()->with('items.product')->first();

        if (!$cart || $cart->items->isEmpty()) {
            session()->flash('error', 'Your cart is empty.');
            return;
        }

        try {
            DB::transaction(function () use ($cart, $user) {

                foreach ($cart->items as $item) {
                    if ($item->quantity > $item->product->stock_quantity) {
                        throw new \Exception(
                            "Insufficient stock for {$item->product->name}"
                        );
                    }
                }

                $total = $cart->items->sum(
                    fn ($item) => $item->quantity * $item->product->price
                );

                $order = Order::create([
                    'user_id' => $user->id,
                    'total_amount' => $total,
                    'status' => 'completed',
                ]);

                foreach ($cart->items as $item) {
                    $order->items()->create([
                        'product_id' => $item->product_id,
                        'quantity' => $item->quantity,
                        'price' => $item->product->price,
                    ]);

                    $item->product->decrement(
                        'stock_quantity',
                        $item->quantity
                    );

                    // Low stock job trigger
                    if ($item->product->stock_quantity <= config('app.low_stock_threshold')) {
                        LowStockNotificationJob::dispatch($item->product);
                    }
                }

                $cart->items()->delete();

                // Update cart counter
                $this->dispatch('cartUpdated');
            });

            session()->flash('success', 'Order placed successfully.');
            return redirect()->route('checkout.success');

        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }
    public function render()
    {
        $cart = auth()->user()->cart;

        return view('livewire.cart.shopping-cart', [
            'items' => $cart?->items()->with('product')->get() ?? [],
        ])->layout('layouts.app');
    }
}
