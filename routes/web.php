<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandlordDashboardController;
use App\Http\Controllers\LandlordTenantController;
use App\Http\Controllers\AdminDashboardController;

Route::get('/', function () {
    return view('welcome');
});

// landlord routes
Route::prefix('landlord')->group(function () {
    // dashboard
    Route::get('/dashboard', [LandlordDashboardController::class, 'index'])->name('landlord.dashboard.index');

    // tenants
    Route::get('/tenants', [LandlordTenantController::class, 'index'])->name('landlord.tenants.index');
});

// admin routes
Route::prefix('admin')->group(function () {
    // dashboard
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
});