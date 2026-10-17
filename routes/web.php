<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcertController;

Route::get('/', [ConcertController::class, 'home'])->name('home');
Route::get('/concerts', [ConcertController::class, 'index'])->name('concerts.index');
Route::get('/concerts/{id}', [ConcertController::class, 'show'])->name('concerts.show');

// Tambahan 2 rute baru
Route::get('/about', [ConcertController::class, 'about'])->name('about');
Route::get('/contact', [ConcertController::class, 'contact'])->name('contact');