<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CaptivePortalForm;
use App\Http\Controllers\AdminController;

Route::get('/', CaptivePortalForm::class)->name('captive-portal');

require __DIR__.'/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])
        ->name('admin.dashboard')
        ->middleware('can:access-admin'); // Add authorization
});