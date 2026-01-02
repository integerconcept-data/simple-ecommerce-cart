<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Simple E-commerce Shopping Cart

A small e-commerce shopping cart system built with **Laravel 11**, **Livewire**, and **Tailwind CSS**.  
Users can browse products, add them to a cart, update quantities, remove items, and checkout.  
Admins receive low-stock notifications and daily sales reports via email.

---

## Features

- User authentication with Laravel Breeze
- Browse products with images, description, price, and stock quantity
- Reactive shopping cart using **Livewire**
- Add/remove products and update quantities in real-time
- Checkout workflow
- Low Stock Notification (email via queued job)
- Daily Sales Report (scheduled job)
- Fully responsive UI with Tailwind CSS

---

## Tech Stack

- **Backend:** Laravel 11
- **Frontend:** Livewire + Blade
- **Styling:** Tailwind CSS
- **Mail/Queue:** Laravel Jobs & Mailables
- **Database:** MySQL / MariaDB
- **Version Control:** Git & GitHub

---

## Installation & Setup

### 1️⃣ Clone the repository

```bash
git clone https://github.com/integerconcept-data/simple-ecommerce-cart.git
cd simple-ecommerce-cart

composer install

npm install
npm run dev

cp .env.example .env

php artisan key:generate

php artisan migrate --seed

php artisan serve


php artisan queue:work
php artisan schedule:run



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
