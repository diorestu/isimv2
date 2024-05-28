<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasController;
// use App\Http\Controllers\AcaraController;

Route::controller(KasController::class)->name('kas.')->prefix('kas')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/tambah', 'create')->name('tambah');
    Route::post('/tambah', 'store')->name('simpan');
    Route::post('/lihat', 'show')->name('lihat');
});
