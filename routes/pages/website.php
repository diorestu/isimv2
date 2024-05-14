<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
