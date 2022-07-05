<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::post('contact', [ContactController::class, 'store'])->name('store.contact');

// Route::get('lang/{locale}', [HomeController::class, 'lang'])->name('lang');

Route::get('lang/{locale}', [HomeController::class, 'lang'])->name('lang');
