#!/usr/bin/env bash

composer global require "laravel/installer=~1.1"
export PATH=~/.composer/vendor/bin:$PATH

cd /var/www

sudo rm -r html
sudo php /usr/local/bin/composer install
sudo cp .env.example .env
sudo php artisan key:generate
php artisan migrate
php artisan db:seed