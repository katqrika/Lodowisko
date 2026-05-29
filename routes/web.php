<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// ── Gość (niezalogowany) ─────────────────────────────────────────────────────
Route::middleware('guest')->group(function () {
    Route::get('/login',       [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login',      [AuthController::class, 'login'])->name('login.post');

    Route::get('/rejestracja',  [AuthController::class, 'showRegister'])->name('register');
    Route::post('/rejestracja', [AuthController::class, 'register'])->name('register.post');
});

// ── Zalogowany ───────────────────────────────────────────────────────────────
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
