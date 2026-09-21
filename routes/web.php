<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatasetController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\AuthController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dataset', [DatasetController::class, 'index'])->name('dataset');
Route::get('/organisasi', [OrganisasiController::class, 'index'])->name('organisasi');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
