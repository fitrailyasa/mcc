<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeEnController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services/{slug}', [HomeController::class, 'servicesDetail'])->name('services-detail');
Route::get('/feedback', [HomeController::class, 'feedback'])->name('feedback');
Route::post('/feedback', [HomeController::class, 'feedbackStore'])->name('feedbackStore');

Route::get('/en', [HomeEnController::class, 'index'])->name('home-en');
Route::get('/en/about', [HomeEnController::class, 'about'])->name('about-en');
Route::get('/en/contact', [HomeEnController::class, 'contact'])->name('contact-en');
Route::get('/en/services', [HomeEnController::class, 'services'])->name('services-en');
Route::get('/en/services/{slug}', [HomeEnController::class, 'servicesDetail'])->name('services-detail-en');
Route::get('/en/feedback', [HomeEnController::class, 'feedback'])->name('feedback-en');
Route::post('/en/feedback', [HomeEnController::class, 'feedbackStore'])->name('feedbackStore-en');

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'confirm' => false,
    'confirm_password' => false
]);

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // CRUD CATEGORY
    Route::resource('category', CategoryController::class)->only(['index', 'store', 'update', 'destroy']);

    // CRUD PACKAGE
    Route::resource('package', PackageController::class)->only(['index', 'store', 'update', 'destroy']);

    // CRUD FEEDBACK
    Route::get('/testimoni', [FeedbackController::class, 'index'])->name('feedback.index');
    Route::delete('/testimoni/destroy/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');

    // CRUD ABOUT
    Route::resource('about', AboutController::class)->only(['edit', 'update']);

    // CRUD USER
    Route::resource('user', UserController::class)->only(['index', 'store', 'update', 'destroy']);
    
});
