<div>
    <div class="max-w-7xl mx-auto p-6">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- CART CARD -->
        <div class="lg:col-span-2 bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Shopping Cart</h2>

            @forelse ($items as $item)
                <div class="flex items-center justify-between border-b py-3">
                    <!-- Product Name -->
                    <div class="w-1/3">
                        <p class="font-medium">{{ $item->product->name }}</p>
                        <p class="text-sm text-gray-500">
                            ${{ number_format($item->product->price, 2) }}
                        </p>
                    </div>

                    <!-- Quantity -->
                    <div class="w-1/3 flex justify-center">
                        <input
                            type="number"
                            min="1"
                            value="{{ $item->quantity }}"
                            class="w-20 border rounded px-2 py-1 text-center"
                            wire:change="updateQuantity({{ $item->id }}, $event.target.value)"
                        />
                    </div>

                    <!-- Remove -->
                    <div class="w-1/3 text-right">
                        <button
                            wire:click="removeItem({{ $item->id }})"
                            class="text-red-600 hover:underline text-sm"
                        >
                            Remove
                        </button>
                    </div>
                </div>
            @empty
                <p class="text-gray-500">Your cart is empty.</p>
            @endforelse
        </div>

        <!-- ORDER SUMMARY CARD -->
        <div class="bg-white shadow rounded-lg p-6 h-fit">
            <h2 class="text-xl font-semibold mb-4">Order Summary</h2>

            <div class="space-y-3 text-sm">
                <div class="flex justify-between">
                    <span>Items</span>
                    <span>{{ $items->sum('quantity') }}</span>
                </div>

                <div class="flex justify-between">
                    <span>Subtotal</span>
                    <span>
                        $
                        {{ number_format(
                            $items->sum(fn ($i) => $i->quantity * $i->product->price),
                            2
                        ) }}
                    </span>
                </div>

                <div class="flex justify-between">
                    <span>Shipping</span>
                    <span>$0.00</span>
                </div>

                <hr>

                <div class="flex justify-between font-semibold text-lg">
                    <span>Total</span>
                    <span>
                        $
                        {{ number_format(
                            $items->sum(fn ($i) => $i->quantity * $i->product->price),
                            2
                        ) }}
                    </span>
                </div>
            </div>

            @if ($items->isNotEmpty())
                <button
                    wire:click="checkout"
                    class="w-full mt-6 bg-green-600 hover:bg-green-700 text-white py-2 rounded"
                >
                    Proceed to Checkout
                </button>
            @endif
        </div>

    </div>
</div>


</div>
