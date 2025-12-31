<div class="relative">
    <a href="#"
       wire:navigate
       class="text-sm text-gray-700 dark:text-gray-500 mr-2 inline-flex items-center">

        <!-- Cart Icon -->
        <svg class="h-5 w-5 mr-1" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293
                     c-.63.63-.184 1.707.707 1.707H17
                     m0 0a2 2 0 100 4 2 2 0 000-4
                     zm-8 2a2 2 0 11-4 0 2 2 0 014 0"/>
        </svg>

        <!-- Badge -->
        @if ($count> 0)
            <span class="bg-red-700 text-white px-2 rounded-full text-xs font-semibold">
                {{ $count }}
            </span>
        @endif
    </a>
</div>

