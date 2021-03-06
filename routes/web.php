<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('search', [DashboardController::class, 'search'])->name('search');
    Route::get('detail/{id}', [DashboardController::class, 'details'])->name('detail');
    Route::get('info', [DashboardController::class, 'info'])->name('info');
    Route::get('checkout', [DashboardController::class, 'checkout'])->name('checkout');
});
