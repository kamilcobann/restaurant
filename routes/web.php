<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SurfPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DummyCommentController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductImageController;
use App\Models\Product;

Route::get('/',[SurfPageController::class,'index'])->name('homepage');
Route::resource('product', ProductController::class)->only(['index', 'show']);
Route::get('login',[AuthController::class,'create'])->name('login');
Route::post('login',[AuthController::class,'store'])->name('login.store');
Route::delete('logout',[AuthController::class,'destroy'])->name('logout');
Route::resource('user-account', UserAccountController::class)->only(['create','store']);
Route::get('comments',[DummyCommentController::class,'getComments'])->name('comments');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(
    function(){
        Route::resource('product', AdminProductController::class)->withTrashed();
        Route::put('/product/{product}/restore', [AdminProductController::class,'restore'])->name('product.restore')->withTrashed();
        Route::resource('category', CategoryController::class)->withTrashed();
        Route::put('/category/{category}/restore', [CategoryController::class,'restore'])->name('category.restore')->withTrashed();
        Route::resource('product.image', ProductImageController::class)->only(['create','store','destroy']);
    }
);
