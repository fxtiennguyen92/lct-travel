<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductSetController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'home'])->name('home');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('accounts', AccountController::class)->except('show');
    Route::put('/account/{id}/restore', [AccountController::class, 'restore'])->name('accounts.restore');
    
    Route::resource('settings', AccountController::class)->except('show');
});