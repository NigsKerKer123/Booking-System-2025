<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandlordDashboardController;
use App\Http\Controllers\LandlordTenantController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminAccountController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminBorrowBookController;
use App\Http\Controllers\AdminReturnBookController;
use App\Http\Controllers\AdminSettingsController;
use App\Http\Controllers\UserBorrowBooksController;
use App\Http\Controllers\UserReturnController;

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

    // account
    Route::get('/account', [AdminAccountController::class, 'index'])->name('admin.account.index');

    //student
    Route::get('/student', [AdminStudentController::class, 'index'])->name('admin.student.index');
    Route::post('/student/store', [AdminStudentController::class, 'store'])->name('admin.student.store');

    //books
    Route::get('/book', [AdminBookController::class, 'index'])->name('admin.book.index');

    //borrow books
    Route::get('/borrow', [AdminBorrowBookController::class, 'index'])->name('admin.borrow.index');

    //return books
    Route::get('/return', [AdminReturnBookController::class, 'index'])->name('admin.return.index');

    //settings
    Route::get('/settings', [AdminSettingsController::class, 'index'])->name('admin.settings.index');
});

Route::prefix('user')->group(function (){
    //borrow books
    Route::get('/borrow', [UserBorrowBooksController::class, 'index'])->name('user.borrow.index');

    //return books
    Route::get('/return', [UserReturnController::class, 'index'])->name('user.return.index');
});

