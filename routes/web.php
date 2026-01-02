<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Cart\ShoppingCart;
use App\Livewire\Checkout\CheckoutSuccess;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/shoppingcart', ShoppingCart::class)->name('shoppingcart');
Route::get('/checkout/success', CheckoutSuccess::class)->name('checkout.success');

require __DIR__.'/auth.php';
