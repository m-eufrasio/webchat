<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\MessageController;

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/user/me', [UserController::class, 'me'])->name('users.me');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/{user}', [UserController::class, 'show']);
    Route::get('/messages/{user}', [MessageController::class, 'index']);
    Route::post('/messages/store', [MessageController::class, 'store']);
});

