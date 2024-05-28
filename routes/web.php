<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


require __DIR__ . '/pages/website.php';

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('post-login', [LoginController::class, 'postLogin'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

    require __DIR__ . '/pages/jamaah.php';
    require __DIR__ . '/pages/acara.php';
    require __DIR__ . '/pages/kas.php';
    require __DIR__ . '/pages/keuangan.php';
});
