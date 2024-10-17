<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('account')->group(function () {

    // Guest middleware
    Route::middleware('redirectIfAuthenticated')->group(function () {
        Route::get('/login', [LoginController::class, 'loginPage'])->name('account.login');
        Route::get('/register', [LoginController::class, 'registerPage'])->name('account.register');

        Route::post('/process-register', [LoginController::class, 'processRegister'])->name('account.processRegister');
        Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
    });

    // Authenticated middleware
    Route::middleware('auth')->group(function () {
        Route::get('/logout', [LoginController::class, 'logout'])->name('account.logout');

        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('account.dashboard');
    });
});

Route::prefix('admin')->group(function () {

    // Guest middleware for admin
    Route::middleware('admin.guest')->group(function () {
        Route::get('/login', [AdminLoginController::class, 'adminLoginPage'])->name('admin.login');
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    // Authenticated middleware for admin
    Route::middleware('admin.auth')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminDashboardController::class, 'logout'])->name('admin.logout');
    });
});
