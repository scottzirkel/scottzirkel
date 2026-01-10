<?php

use Illuminate\Support\Facades\Route;
use Scott\Book\Http\Controllers\WritingJsonController;
use Scott\Design\Http\Controllers\DesignJsonController;

// JSON feeds - cache for 1 hour (3600 seconds)
Route::get('writing.json', WritingJsonController::class)
    ->name('writing.json')
    ->middleware('cache.headers:public;max_age=3600;etag');

Route::get('design.json', DesignJsonController::class)
    ->name('design.json')
    ->middleware('cache.headers:public;max_age=3600;etag');

Route::redirect('sitemap.xml', 'sitemap', 301);
