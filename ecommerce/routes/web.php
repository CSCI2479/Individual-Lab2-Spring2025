<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

// Route to display customer orders
Route::get('/orders', [OrderController::class, 'index']);