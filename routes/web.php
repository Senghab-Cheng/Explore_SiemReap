<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;

Route::get('/contact', function () {
    return view('contact');
});

// Route::post('/tours', [TourController::class, 'createTour']);
// Route::get('/tours/{tour}/edit', [TourController::class, 'showEditScreen']);
// Route::put('/tours/{tour}', [TourController::class, 'updateTour']);
// Route::delete('/tours/{tour}', [TourController::class, 'deleteTour']);
// Route::post('/bookings', [BookingController::class, 'createBooking']);
// Route::get('/bookings/{booking}/edit', [BookingController::class, 'showEditScreen']);
// Route::put('/bookings/{booking}', [BookingController::class, 'updateBooking']);
// Route::delete('/bookings/{booking}', [BookingController::class, 'deleteBooking']);
// Route::post('/contact', [ContactController::class, 'createContact']);
// Route::delete('/contacts/{contact}', [ContactController::class, 'deleteContact']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/signup', fn() => view('signup'));
Route::get('/login', fn() => view('login'));
Route::get('/profile', [ProfileController::class, 'redirect']);
Route::get('/admin/profile', [ProfileController::class, 'admin']);
Route::get('/user/profile', [ProfileController::class, 'user']);
Route::post('/profile/photo', [ProfileController::class, 'updatePhoto']);

Route::post('/create-post',[PostController::class, 'createPost']);
Route::get('/edit-post/{post}',[PostController::class, 'showEditScreen']);
Route::put('/edit-post/{post}',[PostController::class, 'updatePost']);
Route::delete('/delete-post/{post}',[PostController::class, 'deletePost']);

Route::get('/', function () {
    return view('home');
});
Route::get('/hot_spot', fn() => app(PlaceController::class)->index('hot_spot'));
Route::get('/temple', fn() => app(PlaceController::class)->index('temple'));
Route::get('/hotel', fn() => app(PlaceController::class)->index('hotel'));
Route::get('/restaurant', fn() => app(PlaceController::class)->index('restaurant'));
Route::get('/cafe', fn() => app(PlaceController::class)->index('cafe'));
Route::post('/places/{post}/reviews', [ReviewController::class, 'store']);
Route::get('/welcome', function () {
    return view('welcome');
});
