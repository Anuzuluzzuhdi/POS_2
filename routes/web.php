<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/category')->group(function () {
    Route::get('/{category}', [ProductController::class, 'showCategory']);
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

Route::get('/penjualan', [PenjualanController::class, 'index']);
