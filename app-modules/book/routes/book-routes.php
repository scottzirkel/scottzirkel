<?php

use Illuminate\Support\Facades\Route;
use Scott\Book\Http\Controllers\WritingJsonController;

Route::get('/writing.json', WritingJsonController::class)->name('books.index');
