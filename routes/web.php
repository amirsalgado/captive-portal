<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CaptivePortalForm;
use App\Http\Controllers\AdminController;



Route::view('/', 'welcome');
Route::get('/captive-portal', CaptivePortalForm::class)->name('captive-portal');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
