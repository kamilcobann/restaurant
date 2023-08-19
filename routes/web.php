<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SurfPageController;

use App\Http\Controllers\DummyCommentController;

// Route::get('/', [IndexController::class, 'index']);
// Route::get('/hello', [IndexController::class, 'show']);
Route::get('/',[SurfPageController::class,'index'])->name('homepage');
Route::resource('product', ProductController::class);

Route::get('comments',[DummyCommentController::class,'getComments'])->name('comments');
