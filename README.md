## How to Install

- `git clone https://github.com/rakibdevs/laravel-bkash-integration`
- `cd laravel-bkash-integration`
- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- Create a database named `bkash` and update .env credentials
- `php artisan migrate --seed`
- `php artisan serve` to start the app on http://localhost:8000/