<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ModelController;
use Illuminate\Support\Facades\Route;

Route::get('categories/list', [CategoryController::class, 'indexFlat']);

Route::apiResource('categories', CategoryController::class);
Route::apiResource('bookings', BookingController::class);
Route::apiResource('models', ModelController::class);
