<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// Landing Page (publik)
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Dashboard setelah login → diarahkan ke events.index
Route::get('/dashboard', function () {
    return redirect()->route('events.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Event CRUD (hanya untuk user login)
Route::middleware('auth')->group(function () {
    Route::resource('events', EventController::class);
});

require __DIR__.'/auth.php';
