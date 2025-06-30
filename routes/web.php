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
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminManagementController;
use App\Http\Controllers\Admin\UserManagementController;

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

// Profile routes - protected by auth middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('/profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
});

// User logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Admin Authentication Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Guest admin routes (not logged in)
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login']);
    });

    // Protected admin routes (logged in)
    Route::middleware('auth:admin')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
        
        // Admin Management
        Route::resource('admins', AdminManagementController::class);
        Route::get('/admins/trashed/index', [AdminManagementController::class, 'trashed'])->name('admins.trashed');
        Route::patch('/admins/{id}/restore', [AdminManagementController::class, 'restore'])->name('admins.restore');
        Route::delete('/admins/{id}/force-delete', [AdminManagementController::class, 'forceDelete'])->name('admins.force-delete');
        
        // User Management  
        Route::resource('users', UserManagementController::class)->except(['create', 'store', 'show']);
        Route::get('/users/trashed/index', [UserManagementController::class, 'trashed'])->name('users.trashed');
        Route::patch('/users/{id}/restore', [UserManagementController::class, 'restore'])->name('users.restore');
        Route::delete('/users/{id}/force-delete', [UserManagementController::class, 'forceDelete'])->name('users.force-delete');
        
        // Gallery Management
        Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
        Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store');
        Route::delete('/gallery/{image}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
        
        // Forms Management
        Route::get('/forms', function () {
            return view('dashboard.google-links.index');
        })->name('forms');
        
        // Dossiers Management
        Route::get('/dossiers', [DossierController::class, 'index'])->name('dossiers');
        Route::get('/dossiers/create', [DossierController::class, 'create'])->name('dossiers.create');
        Route::post('/dossiers', [DossierController::class, 'store'])->name('dossiers.store');
        Route::delete('/dossiers/{dossier}', [DossierController::class, 'destroy'])->name('dossiers.destroy');
        
        // Documents Management
        Route::get('/documents', [DocumentController::class, 'index'])->name('documents');
        Route::get('/documents/create', [DocumentController::class, 'create'])->name('documents.create');
        Route::post('/documents', [DocumentController::class, 'store'])->name('documents.store');
        Route::delete('/documents/{document}', [DocumentController::class, 'destroy'])->name('documents.destroy');
        
        // Testimonials Management
        Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');
    });
});

Auth::routes();

