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



## Login Credential
- Default email: test@example.com
- Default password: password

