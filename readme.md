
# Laravel Socialite Example

> Laravel 5.4 Socialite Facebook,Google,Github project Example

# Setup

``` bash

#1 install composer dependencies 
composer install

#2 copy .env.example to .env
cp .env.example .env
(change the config in .env to match your environment settings( database username, password and database name ,facebook,google,github))

#3 Generating a New Application Key
php artisan key:generate

#4 Run migrations
php artisan migrate

#5 Run serve
php artisan serve --host=localhost --port=8000

```

## References
 [laravel socialite](https://github.com/laravel/socialite)
