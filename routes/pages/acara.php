<?php

use App\Http\Controllers\AcaraController;
use Illuminate\Support\Facades\Route;

Route::controller(AcaraController::class)->name('acara.')->prefix('acara')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/tambah', 'create')->name('tambah');
    Route::post('/tambah', 'store')->name('simpan');
    Route::post('/lihat', 'detail')->name('lihat');
    Route::get('/kalender', 'kalender')->name('kalender');
});
