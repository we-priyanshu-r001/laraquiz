<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FlushSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AllowIfAdmin;
use App\Http\Middleware\CustomAuth;
use App\Http\Middleware\RedirectIfAuthenticated;

// Landing Page Route
Route::get('/', LandingController::class)->name('show.landing')->middleware(RedirectIfAuthenticated::class);

// User Routes
Route::prefix('user')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('show.user.dashboard')->middleware(CustomAuth::class);
    Route::get('/register', [UserController::class, 'showRegister'])->name('show.user.register')->middleware(RedirectIfAuthenticated::class);
    Route::post('/register',[UserController::class, 'register'])->name('user.register');
    Route::get('/login', [UserController::class, 'showLogin'])->name('show.user.login')->middleware(RedirectIfAuthenticated::class);
    Route::post('/login', [UserController::class, 'login'])->name('user.login');
    Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');
});

Route::get('admin_dashboard', [AdminController::class, 'index'])->name('show.admin.dashboard')->middleware(AllowIfAdmin::class);

// Dev Routes
Route::get('/invalidate', FlushSessionController::class);
