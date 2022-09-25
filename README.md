## How to Install

- `git clone https://github.com/rakibdevs/laravel-bkash-integration`
- `cd laravel-bkash-integration`
- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- Create a database named `bkash` and update .env credentials
- `php artisan migrate --seed`
- `php artisan serve` to start the app on http://localhost:8000/

Please update environment variables for Bkash Payment
```BKASH_CHECKOUT_SANDBOX=true
BKASH_CHECKOUT_VERSION="v1.2.0-beta"
BKASH_CHECKOUT_APP_KEY=""
BKASH_CHECKOUT_APP_SECRET=""
BKASH_CHECKOUT_USER_NAME="sandboxTestUser"
BKASH_CHECKOUT_PASSWORD=""
BKASH_CHECKOUT_CALL_BACK_URL=""
```

#### Create your Own order
- POST /order
`{
    'amount': 10XX
}`

#### Order List
- GET /Order


#### Make Payment

Create a payment with order id and it will execute payment
- GET bkash/create-payment?order_id=X

