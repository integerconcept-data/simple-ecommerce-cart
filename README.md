<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Simple E-commerce Shopping Cart

This project is a simple e-commerce shopping cart application built with Laravel 11, Livewire, and Tailwind CSS.  
It demonstrates authenticated, user-bound cart management, background jobs, and scheduled reporting using Laravel best practices..

---
##  Tech Stack

- Backend: Laravel 11
- Frontend: Livewire (via Laravel Breeze)
- Styling: Tailwind CSS
- Authentication: Laravel Breeze
- Background Jobs: Laravel Queues
- Scheduling: Laravel Task Scheduler
- Version Control: Git / GitHub

---

##  Features

- User authentication (register/login)
- Browse products
- Add products to cart
- Update cart item quantities
- Remove items from cart
- Cart is persisted per authenticated user (no sessions or local storage)
- Low stock email notification via queued job
- Daily sales report sent via scheduled command


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
