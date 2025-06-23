<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PublicController::class, 'home']);
Route::get('/about-us', [PublicController::class, 'aboutUs']);
Route::get('/contact-us', [PublicController::class, 'contactUs']);
Route::get('/join-us', [PublicController::class, 'joinUs']);
Route::get('/testimonials', [PublicController::class, 'testimonials']);
Route::get('/gallery', [PublicController::class, 'gallery']);

// Form submission routes
Route::post('/join-us', [PublicController::class, 'submitJoinForm'])->name('join.submit');
Route::post('/contact-us', [PublicController::class, 'submitContactForm'])->name('contact.submit');

// Login route (placeholder - no page created yet)
Route::get('/login', function () {
    return redirect('/join-us')->with('info', 'صفحة تسجيل الدخول قيد الإنشاء');
});