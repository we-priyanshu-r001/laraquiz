<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;

// Landing Page Route
Route::get('/', LandingController::class);

// User Routes
Route::prefix('user')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/register', [UserController::class, 'showRegister'])->name('show.user.register');
    Route::post('/register',[UserController::class, 'register'])->name('user.register');
    Route::get('/login', [UserController::class, 'showLogin'])->name('show.user.login');
    Route::post('/login', [UserController::class, 'login'])->name('user.login');
});
