<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Authentication routes with CSRF protection and rate limiting
Route::middleware(['throttle:auth'])->group(function () {
    Route::post('/api/register', [AuthController::class, 'register']);
    Route::post('/api/login', [AuthController::class, 'login']);
});

// All protected API routes with CSRF protection
Route::middleware(['auth:sanctum', 'throttle:api'])->prefix('api')->group(function () {
    // Auth endpoints
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);

    // Add any other API endpoints here
});
