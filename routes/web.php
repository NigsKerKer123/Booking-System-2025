<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandlordDashboardController;
use App\Http\Controllers\LandlordTenantController;
use App\Http\Controllers\RegisterTenantController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Middleware;

//central domain routes
foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::middleware('redirect')->group(function () {
            Route::get('/login', [LoginController::class, 'index'])->name('login');
            Route::post('/login', [LoginController::class, 'login'])->name('login.post');

            Route::get('/register', [RegisterTenantController::class, 'index'])->name('register');
            Route::post('/register/store', [RegisterTenantController::class, 'store'])->name('tenant.store');

            Route::get('/', function () {
            return redirect()->route('welcome');
            });

            Route::get('/welcome', function () {
                return view('welcome');
            })->name('welcome');
        });

        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

        // landlord routes

        Route::middleware('landlord')->prefix('landlord')->group(function () {
            // dashboard
            Route::get('/dashboard', [LandlordDashboardController::class, 'index'])->name('landlord.dashboard.index');

            // tenants
            Route::get('/tenants', [LandlordTenantController::class, 'index'])->name('landlord.tenants.index');
        });


    });
}