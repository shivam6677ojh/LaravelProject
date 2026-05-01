<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Auth::check() ? redirect()->route('dashboard') : view('welcome');
});

Route::get('/dashboard', DashboardController::class)
    ->middleware(['auth'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('plans', PlanController::class)->except(['show']);
    Route::post('/plans/{plan}/book', [BookingController::class, 'store'])->name('plans.book');

    Route::get('/chatbot', [ChatController::class, 'index'])->name('chatbot.index');
    Route::post('/chatbot', [ChatController::class, 'store'])->name('chatbot.store');

    Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
