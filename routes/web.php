<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;

// Route::get('/', [IndexController::class, 'index']);
// Route::get('/hello', [IndexController::class, 'show']);

Route::resource('product', ProductController::class);
