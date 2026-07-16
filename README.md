# Laravel Product API

A Laravel 10 REST API learning project for managing product and category
resources. It focuses on straightforward CRUD routes, Eloquent models, and
resource relationships.

## Features

- REST-style product endpoints
- REST-style category endpoints
- Product responses with category data
- Laravel migrations and seeders for local development

## Stack

- PHP 8.1+
- Laravel 10
- Laravel Sanctum dependency
- Vite

## Run locally

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Configure a local database in `.env`, then run:

```bash
php artisan migrate
php artisan serve
```

The CRUD endpoints are available below `/api/categories` and `/api/products`.

## Status

Learning project. The resource controllers intentionally stay simple and are
not presented as production-ready API code.

## Attribution

Built by [Danish](https://github.com/Unknown2-1). Personal contact details are
kept private; project discussion can stay on GitHub.
