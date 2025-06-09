<?php

use App\Http\Controllers\FlushSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CustomAuth;

// Landing Page Route
Route::get('/', LandingController::class);

// User Routes
Route::prefix('user')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('user.dashboard')->middleware(CustomAuth::class);
    Route::get('/register', [UserController::class, 'showRegister'])->name('show.user.register');
    Route::post('/register',[UserController::class, 'register'])->name('user.register');
    Route::get('/login', [UserController::class, 'showLogin'])->name('show.user.login');
    Route::post('/login', [UserController::class, 'login'])->name('user.login');
});

Route::get('admin_dashboard', function(){
    return view('pages.adminDashboard');
});

// Dev Routes
Route::get('/invalidate', FlushSessionController::class);
