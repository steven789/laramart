### About Laramart

Laramart is Laravel Starter Project with Admin Mart Template implementation.

## Extra Features
- Custom form component (Bootstrap 4)

## Installation
Clone this repo (over SSH or HTTPS):
```git clone git@github.com:steven789/laramart.git```
Install composer packages:
```composer update```
Duplicate .env.example as .env, update the environment variables and set an app key:
```php artisan key:generate```
After that, run all migrations and seed the database:
```php artisan migrate php artisan db:seed```
Or if your database is fresh and you haven't done any work yet, then it's safe to call the commands in a single line:
```php artisan migrate:refresh --seed```

## Extra Features
- [Laravel](https://github.com/laravel/laravel)
- [Adminmart](https://github.com/adminmart)
- [LaravelCollective HTML](https://github.com/laravelcollective/html)
