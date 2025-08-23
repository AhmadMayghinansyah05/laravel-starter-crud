<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// Landing: publik
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Event publik (read-only)
Route::resource('events', EventController::class)->only(['index', 'show']);

// Event CRUD (write) protected
Route::middleware('auth')->group(function () {
    Route::resource('events', EventController::class)->only(['create','store','edit','update','destroy']);
});

require __DIR__.'/auth.php';
