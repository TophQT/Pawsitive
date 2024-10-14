<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PetCareController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserprofController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\AppointmentController; // Include this line
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

// Home Route
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Main and Services Routes
Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/petcare', [PetCareController::class, 'index'])->name('petcare.articles');
Route::get('/petcare/articles', [PetCareController::class, 'showArticles'])->name('petcare.index');

// Custom Authentication Routes
Route::prefix('custom-auth')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('custom-auth.login');
    Route::post('/login', [AuthController::class, 'login'])->name('custom-auth.login.submit');
    Route::get('/signup', [AuthController::class, 'showSignUp'])->name('custom-auth.signup');
    Route::post('/signup', [AuthController::class, 'register'])->name('custom-auth.signup.submit');
    Route::get('/verify1', [AuthController::class, 'showVerify1'])->name('custom-auth.verify1');
    Route::get('/security1', [AuthController::class, 'showSecurity1'])->name('custom-auth.security1');
    Route::get('/check1', [AuthController::class, 'showCheck1'])->name('custom-auth.check1');
    Route::get('/check2', [AuthController::class, 'showCheck2'])->name('custom-auth.check2');
    Route::get('/forgot1', [AuthController::class, 'showForgot1'])->name('custom-auth.forgot1');
    Route::get('/new', [AuthController::class, 'showNew'])->name('custom-auth.new');
});

// User Profile Routes
Route::get('/main/select', [MainController::class, 'showSelect'])->name('main.select');
Route::get('/user-pfp/profile', [UserprofController::class, 'showProfile'])->name('user-pfp.profile');
Route::get('/user-pfp/pet', [UserprofController::class, 'showPet'])->name('user-pfp.pet');

// Booking Routes
Route::prefix('booking')->group(function () {
    Route::get('/create', [BookingController::class, 'create'])->name('booking.create'); // Show booking form
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
    Route::post('/submit_booking', [BookingController::class, 'store'])->name('submit.booking');
});

// Appointment Routes
Route::middleware('auth')->group(function () {
    Route::get('/appointments', [AppointmentController::class, 'showAppointments'])->name('appointments'); // Add this line
});

// Admin Routes
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');
    Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin.users');
    Route::get('/admin/reviews', [AdminController::class, 'showReviews'])->name('admin.reviews');
    Route::get('/admin/appointments', [AppointmentController::class, 'showAppointments'])->name('admin.appointments');
    Route::post('/appointments/update-status/{id}', [AppointmentController::class, 'updateStatus'])->name('appointments.updateStatus');
    Route::get('/admin/forgot', [AdminController::class, 'showForgot'])->name('admin.forgot');
    Route::get('/admin/new', [AdminController::class, 'showNew'])->name('admin.new');
    Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::get('/admin/sms', [AdminController::class, 'showReset'])->name('admin.sms');
});

Route::middleware('auth')->group(function () {
    Route::get('/pets', [PetController::class, 'index'])->name('pets.index'); // List all pets
    Route::get('/pets/create', [PetController::class, 'create'])->name('pets.create'); // Show form to add a new pet
    Route::post('/pets', [PetController::class, 'store'])->name('pets.store'); // Store new pet
    Route::get('/pets/{pet}', [PetController::class, 'show'])->name('pets.show'); // Show details of a specific pet
    Route::get('/pets/{pet}/edit', [PetController::class, 'edit'])->name('pets.edit'); // Show edit form for a pet
    Route::put('/pets/{pet}', [PetController::class, 'update'])->name('pets.update'); // Update pet details
    Route::delete('/pets/{pet}', [PetController::class, 'destroy'])->name('pets.destroy'); // Delete a pet
    Route::get('/pets/{id}', [PetController::class, 'show'])->name('pets.show');
});

// Logout Route
Route::post('/logout', [AuthController::class, 'logout'])->name('custom-auth.logout');

// Registration Route
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Require Auth Routes (built-in Laravel authentication)
require __DIR__.'/auth.php';
