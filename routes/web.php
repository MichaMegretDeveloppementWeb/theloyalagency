<?php

use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
