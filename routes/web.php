<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\Auth\LoginController;


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

    Route::controller(KeuanganController::class)->name('keuangan.')->prefix('keuangan')->group(function () {
        Route::get('/', 'informasi')->name('informasi');
        Route::get('/pemasukan', 'debet')->name('pemasukan');
        Route::get('/pengeluaran', 'kredit')->name('pengeluaran');
        Route::post('/pemasukan', 'saveDebet')->name('input.pemasukan');
        Route::post('/pengeluaran', 'saveKredit')->name('input.pengeluaran');
        Route::post('/laporan', 'report')->name('lihat');
    });
});
