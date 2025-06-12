#!/bin/bash

echo "Installing Composer dependencies"
composer install --no-dev --optimize-autoloader

echo "Creating SQLite database"
touch /tmp/database.sqlite
php artisan migrate --force

echo "Setting up Laravel"
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Installing NPM dependencies"
npm install --legacy-peer-deps

echo "Building assets"
npm run build --if-present 