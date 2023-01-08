<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//dashboardku
// Route::get('/login', [\App\Http\Controllers\AuthController::class]);
Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::resource('/categories', \App\Http\Controllers\CategoryController::class);
Route::resource('/tags', \App\Http\Controllers\TagController::class);
Route::resource('/products', \App\Http\Controllers\ProductController::class);
