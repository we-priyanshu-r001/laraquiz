<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;

// Landing Page Route
Route::get('/', LandingController::class);

// User Routes
Route::prefix('user')->group(function(){
    Route::get('/', [UserController::class, 'index']);
    Route::get('/register', [UserController::class, 'register']);
    Route::get('/login', [UserController::class, 'login']);
    Route::post('/store',[UserController::class, 'store']);

});
