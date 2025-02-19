<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        App::singleton('brace', fn () => [
            'title' => 'TBA',
            'status' => 'First Draft',
            'parts' => [
                [
                    'status' => 'First Draft',
                    'progress' => 1,
                ],
                [
                    'status' => 'Pre-writing',
                    'progress' => 0,
                ],
                [
                    'status' => 'Pre-writing',
                    'progress' => 0,
                ],
                [
                    'status' => 'Pre-writing',
                    'progress' => 0,
                ],
                [
                    'status' => 'Pre-writing',
                    'progress' => 0,
                ],
            ],
        ]
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
