<?php

use App\Http\Controllers\AcaraController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;



Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('post-login', [LoginController::class, 'postLogin'])->name('login.post');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('dashboard', [LoginController::class, 'dashboard']);

Route::controller(AcaraController::class)->name('acara.')->prefix('acara')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/tambah', 'create')->name('tambah');
    Route::post('/tambah', 'store')->name('simpan');
});
