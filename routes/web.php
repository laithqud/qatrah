<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\DossierController;
use App\Http\Controllers\Admin\DocumentController;

Route::get('/', function () {
    return view('public.home');
});

Route::get('/home', [PublicController::class, 'home']);
Route::get('/about-us', [PublicController::class, 'aboutUs']);
Route::get('/contact-us', [PublicController::class, 'contactUs']);
Route::get('/join-us', [PublicController::class, 'joinUs']);
Route::get('/testimonial', [PublicController::class, 'testimonials']);
Route::get('/gallery', [PublicController::class, 'gallery']);
Route::get('/documents-dossiers', [PublicController::class, 'documents']);

Route::post('/join-us', [PublicController::class, 'submitJoinForm'])->name('join.submit');
Route::post('/contact-us', [PublicController::class, 'submitContactForm'])->name('contact.submit');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Auth::routes();

// Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/gallery-dashboard', [GalleryController::class, 'index'])->name('admin.gallery.index');
    Route::post('/gallery', [GalleryController::class, 'store'])->name('admin.gallery.store');
    Route::delete('/gallery/{image}', [GalleryController::class, 'destroy'])->name('admin.gallery.destroy');

    Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials');

    Route::get('/dossiers', [DossierController::class, 'index'])->name('dossiers');
    Route::get('/dossiers-create', [DossierController::class, 'create'])->name('dossiers.create');
    Route::post('/dossiers-store', [DossierController::class, 'store'])->name('dossiers.store');
    Route::delete('/dossiers-delete', [DossierController::class, 'destroy'])->name('dossiers.destroy');

    Route::get('/documents', [DocumentController::class, 'index'])->name('documents');
    Route::get('/documents-create', [DocumentController::class, 'create'])->name('dashboard.documents.create');
    Route::post('/documents-store', [DocumentController::class, 'store'])->name('dashboard.documents.store');
    Route::delete('/documents-delete', [DocumentController::class, 'destroy'])->name('dashboard.documents.destroy');
// });

 Route::get('/dashboard', function () {
        return view('dashboard.main');
    })->name('dashboard');