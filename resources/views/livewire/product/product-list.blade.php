<div>
   <main class="my-2">
        <div class="container mx-auto px-6">
            <h3 class="text-gray-700 text-2xl font-medium">Products</h3>
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                @foreach($products as $product)
                    <div class="border p-4 rounded space-y-2">
                        @if ($product->image)
                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                class="w-full h-40 object-cover rounded"
                                alt="{{ $product->name }}"
                            />
                        @endif

                        <h3 class="font-semibold">{{ $product->name }}</h3>

                        @if ($product->description)
                            <p class="text-sm text-gray-600">
                                {{ $product->description }}
                            </p>
                        @endif

                        <p class="font-bold">
                            ₦{{ number_format($product->price, 2) }}
                        </p>

                        <p class="text-sm">
                            Stock: {{ $product->stock_quantity }}
                        </p>

                        <button
                            wire:click="addToCart({{ $product->id }})"
                            class="bg-blue-600 text-white px-4 py-2"
                            @disabled($product->stock_quantity === 0)
                        >
                            Add to Cart
                        </button>
                    </div>

                @endforeach
            </div>
        </div>
    </main>
</div>
