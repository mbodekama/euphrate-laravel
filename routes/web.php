<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

// Pages publiques
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/cours', [PageController::class, 'cours'])->name('cours');
Route::get('/vie-scolaire', [PageController::class, 'vieScolaire'])->name('vie-scolaire');
Route::get('/enseignements', [PageController::class, 'enseignements'])->name('enseignements');
Route::get('/actualite', [PageController::class, 'actualite'])->name('actualite');

// Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'sendContact'])->name('contact.send');

// Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
