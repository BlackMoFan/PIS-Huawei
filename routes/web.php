<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThankYouController;
use App\Http\Controllers\GeocodingController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('enquiries', \App\Livewire\Enquiries::class)
    ->middleware(['auth', 'verified'])
    ->name('admin.enquiries');

Route::get('/help-form', \App\Livewire\HelpSubmit::class)->name('help-form');

Route::get('/thank-you', [ThankYouController::class, 'show'])->name('thank-you');

Route::get('/geocode', [GeocodingController::class, 'getAddress']);

require __DIR__.'/auth.php';
