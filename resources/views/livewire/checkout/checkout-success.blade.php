<div>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md text-center">

        <!-- Success Icon -->
        <div class="flex justify-center mb-4">
            <svg class="w-16 h-16 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 6L9 17l-5-5"/>
            </svg>
        </div>

        <h1 class="text-2xl font-bold text-gray-800 mb-2">
            Order Successful
        </h1>

        <p class="text-gray-600 mb-6">
            Thank you for your purchase. Your order has been placed successfully.
        </p>

        <div class="space-y-3">
            <a href="{{ route('dashboard') }}"
               class="block w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded">
                Continue Shopping
            </a>


        </div>

    </div>
</div>

</div>
