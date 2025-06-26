<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('public.home');
});

Route::get('/home', [PublicController::class, 'home']);
Route::get('/about-us', [PublicController::class, 'aboutUs']);
Route::get('/contact-us', [PublicController::class, 'contactUs']);
Route::get('/join-us', [PublicController::class, 'joinUs']);
Route::get('/testimonials', [PublicController::class, 'testimonials']);
Route::get('/gallery', [PublicController::class, 'gallery']);
Route::get('/documents', [PublicController::class, 'documents']);

// Form submission routes
Route::post('/join-us', [PublicController::class, 'submitJoinForm'])->name('join.submit');
Route::post('/contact-us', [PublicController::class, 'submitContactForm'])->name('contact.submit');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::get('/dashboard', function () {
        return view('dashboard.main');
    })->name('dashboard');