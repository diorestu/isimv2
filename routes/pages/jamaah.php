<?php

use App\Http\Controllers\JamaahController;
use Illuminate\Support\Facades\Route;

Route::controller(JamaahController::class)->name('jamaah.')->prefix('jamaah')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/tambah', 'create')->name('tambah');
    Route::post('/tambah', 'store')->name('simpan');
    Route::post('/tambah/KK', 'storeKK')->name('simpan.kk');
    Route::post('/lihat', 'detail')->name('lihat');
    Route::get('/kalender', 'kalender')->name('kalender');
});
