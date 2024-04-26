<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
/* Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile'); */

    /**General user routes **/
Route::middleware(['auth', 'verified'])->get('/dashboard', [DashboardController::class, 'generalUserDashboard'])->name('dashboard');

/**Admin routes **/
Route::middleware('adminAuth')->prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('adminDashboardShow');
});

/**Super Admin routes **/
Route::middleware('superAdminAuth')->prefix('superAdmin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'superAdminDashboard'])->name('superAdminDashboardShow');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', 'ProfileController@index')->name('profile');

require __DIR__.'/auth.php';
