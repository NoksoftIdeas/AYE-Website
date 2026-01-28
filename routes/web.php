<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\AdvocacyController;
use App\Http\Controllers\GetInvolvedController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/education', [EducationController::class, 'index'])->name('education');
Route::get('/education/{topic}', [EducationController::class, 'show'])->name('education.show');
Route::get('/support', [SupportController::class, 'index'])->name('support');
Route::get('/resources/{resource}/download', [SupportController::class, 'download'])->name('resources.download');
Route::get('/advocacy', [AdvocacyController::class, 'index'])->name('advocacy');
Route::get('/get-involved', [GetInvolvedController::class, 'index'])->name('get-involved');
Route::post('/volunteer', [GetInvolvedController::class, 'volunteer'])->name('volunteer.submit');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

// Auth Routes
Route::middleware('auth')->group(function () {
    // Dashboard - redirect to admin dashboard for admin users
    Route::get('/dashboard', function () {
        if (auth()->user()->is_admin) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('home');
    })->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/contacts', [AdminDashboardController::class, 'contacts'])->name('contacts');
    Route::delete('/contacts/{id}', [AdminDashboardController::class, 'deleteContact'])->name('contacts.delete');
    Route::get('/volunteers', [AdminDashboardController::class, 'volunteers'])->name('volunteers');
    Route::delete('/volunteers/{id}', [AdminDashboardController::class, 'deleteVolunteer'])->name('volunteers.delete');
});

require __DIR__.'/auth.php';
