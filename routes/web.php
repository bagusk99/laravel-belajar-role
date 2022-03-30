<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
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

Route::middleware('auth')->group(function() {
    Route::prefix('content')->group(function() {

        Route::get('/', [ContentController::class, 'index'])->name('content');
        Route::get('/nilai', [ContentController::class, 'nilai'])->middleware(['role:super_admin|dosen'])->name('nilai');

    });

    Route::get('/logout', [AuthController::class, 'do_logout'])->name('do_logout');
});

Route::middleware('guest')->group(function() {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/', [AuthController::class, 'do_login'])->name('do_login');
});
