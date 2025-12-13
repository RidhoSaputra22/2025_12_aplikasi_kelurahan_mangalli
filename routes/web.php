<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/berita/detail/{slug}', [HomeController::class, 'beritaDetail'])->name('berita.detail');
