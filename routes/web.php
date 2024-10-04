<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MotorcycleController;

Route::get('/', [MotorcycleController::class, 'index'])->name('home');

Route::resource('motorcycles', MotorcycleController::class);

