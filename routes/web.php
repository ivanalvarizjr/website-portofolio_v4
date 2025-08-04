<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Public Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/projek', [PageController::class, 'projek'])->name('projek');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Form Kontak (POST)
Route::post('/send-message', [PageController::class, 'sendMessage'])->name('send.message');

// Admin Page (optional)
Route::get('/admin', [PageController::class, 'admin'])->name('admin.dashboard');

