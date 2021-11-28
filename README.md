###Requirements

php 8.0+

mysql

composer

or use laravel-sail
###Installation

cd /var/www

git clone ... crudproject

cd crudproject

composer install

define database, APP_KEY in .env

php artisan migrate --seed or sail artisan migrate --seed

php artisan serve or sail artisan ud -d
