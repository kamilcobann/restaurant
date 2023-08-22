<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SurfPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DummyCommentController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\AdminProductController;

// Route::get('/', [IndexController::class, 'index']);
// Route::get('/hello', [IndexController::class, 'show']);
Route::get('/',[SurfPageController::class,'index'])->name('homepage');
Route::resource('product', ProductController::class)->only(['index', 'show']);
Route::get('login',[AuthController::class,'create'])->name('login');
Route::post('login',[AuthController::class,'store'])->name('login.store');
Route::delete('logout',[AuthController::class,'destroy'])->name('logout');
Route::resource('user-account', UserAccountController::class)->only(['create','store']);
Route::resource('admin-product', AdminProductController::class)->except('show')->middleware('auth');
Route::get('comments',[DummyCommentController::class,'getComments'])->name('comments');
