<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category', [HomeController::class, 'choose'])->name('choose');

// Halaman Products (Category)
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

// Halaman User
Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

// Halaman Penjualan (POS)
Route::get('/sales', [SalesController::class, 'index']);
