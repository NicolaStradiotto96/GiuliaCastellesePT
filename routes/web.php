<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', [PublicController::class, 'home'])->name('home');
