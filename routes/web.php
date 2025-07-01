<?php

use Illuminate\Support\Facades\Route;
use Scott\Book\Http\Controllers\WritingJsonController;
use Scott\Design\Http\Controllers\DesignJsonController;

Route::get('writing.json', WritingJsonController::class)->name('writing.json');
Route::get('design.json', DesignJsonController::class)->name('design.json');
Route::redirect('sitemap.xml', 'sitemap');
