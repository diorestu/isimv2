<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AcaraController;
use App\Http\Controllers\KeuanganController;

Route::controller(KeuanganController::class)->name('keuangan.')->prefix('keuangan')->group(function () {
    Route::get('/', 'informasi')->name('informasi');
    Route::get('/pemasukan', 'debet')->name('pemasukan');
    Route::get('/pengeluaran', 'kredit')->name('pengeluaran');
    Route::post('/pemasukan', 'saveDebet')->name('input.pemasukan');
    Route::post('/pengeluaran', 'saveKredit')->name('input.pengeluaran');
    Route::post('/laporan', 'report')->name('lihat');
});
