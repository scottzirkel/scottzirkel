<?php

namespace Scott\Book\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class BookServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Relation::morphMap([
            'book' => Book::class,
        ]);
    }

    public function boot(): void {}
}
