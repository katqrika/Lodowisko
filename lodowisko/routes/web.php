<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\PricingController;

// 1. Ścieżki publiczne
Route::get('/', [HomeController::class, 'index'])->name('home');

// 2. Ścieżki dla zalogowanych użytkowników (Klienci)
Route::middleware(['auth'])->group(function () {
    Route::get('/rezerwacja', [ReservationController::class, 'index'])->name('user.reservation');
    Route::get('/katalog', [ReservationController::class, 'catalog'])->name('user.catalog');
});

// 3. Ścieżki dla Administratora
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/harmonogram', [ScheduleController::class, 'index'])->name('admin.schedule');
    Route::get('/cennik', [PricingController::class, 'index'])->name('admin.pricing');
});