<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('products', ProductController::class);
    Route::get('/category/{id}', [ProductController::class, 'category'])
    ->name('products.category');
    Route::post('/cart/add/{id}', [ProductController::class, 'addToCart'])
    ->name('cart.add');
    Route::get('/cart', [ProductController::class, 'cart'])
    ->name('cart');
    Route::delete('/cart/remove/{id}', [ProductController::class, 'removeCart'])
    ->name('cart.remove');
});

require __DIR__.'/auth.php';
