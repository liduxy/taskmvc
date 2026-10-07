<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NIMController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;


Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard ', 'dashboard')->name('dashboard');
});
// Route::get('/TampilanNIM', [NIMController::class, 'TampilanNIM']);
// Route::get('index', [NIMController::class, 'index']);
// Route::get('/create', [NIMController::class, 'create']);

// Route::get('/create', [HomeController::class, 'create']);
// Route::get('homes', [HomeController::class, 'index'])->name('homes.index');
// Routes::inertia('/homes', [HomeController::class,'index'])->name('homes.index');
Route::get('index', [HomeController::class, 'index']);
Route::get('create', [HomeController::class,'create']);



require __DIR__.'/settings.php';
