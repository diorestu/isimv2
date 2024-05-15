<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Route;


require __DIR__ . '/pages/website.php';

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('post-login', [LoginController::class, 'postLogin'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('app')->middleware('auth')->group(function () {
    Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

    require __DIR__ . '/pages/acara.php';


    Route::controller(KasController::class)->name('kas.')->prefix('kas')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/tambah', 'create')->name('tambah');
        Route::post('/tambah', 'store')->name('simpan');
        Route::post('/lihat', 'show')->name('lihat');
    });
});
