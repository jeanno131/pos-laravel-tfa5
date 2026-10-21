# POS Laravel TFA5

A simple Point-of-Sale application created using Laravel for IT0049 Web System Technologies.

## Features

- Landing page
- About page
- Customer Accounts page
- User Accounts page
- Navigation links between all pages
- Static PHP arrays for sample records
- Blade `@foreach` loops
- Customer database migration and seeder

## Requirements

- PHP
- Composer
- Laravel

## Installation

```bash
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve