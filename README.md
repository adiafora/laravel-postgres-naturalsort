laravel-postgres-naturalsort
=======================================

This simple package will help you add natural sorting to your Eloquent models if you use PostgreSQL.

Installation
-----------------------------------

Run:

```php
    composer require "adiafora/laravel-postgres-naturalsort"
```

Run migration on the package:

```php
    php artisan migrate
```


Usage
-----------------------------------

You can add a `NaturalSortTrait` to any Eloquent model

```php

Product extends Model
{
    use \Adiafora\NaturalSort\NaturalSortTrait;
}

```

And in your client code you can write:

```php
Product::orderByNatural('text')->get();
```

or reverse sorting

```php
Product::orderByNaturalDesc('text')->get();
```


License
-----------------------------------

The MIT License (MIT). Please see License File for more information.
