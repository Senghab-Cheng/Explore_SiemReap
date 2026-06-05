<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController; 

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/tours', [TourController::class, 'createTour']);
Route::get('/tours/{tour}/edit', [TourController::class, 'showEditScreen']);
Route::put('/tours/{tour}', [TourController::class, 'updateTour']);
Route::delete('/tours/{tour}', [TourController::class, 'deleteTour']);
Route::post('/bookings', [BookingController::class, 'createBooking']);
Route::get('/bookings/{booking}/edit', [BookingController::class, 'showEditScreen']);
Route::put('/bookings/{booking}', [BookingController::class, 'updateBooking']);
Route::delete('/bookings/{booking}', [BookingController::class, 'deleteBooking']);
Route::post('/contact', [ContactController::class, 'createContact']);
Route::delete('/contacts/{contact}', [ContactController::class, 'deleteContact']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/signup', fn() => view('signup'));
Route::get('/login', fn() => view('login'));


Route::get('/dashboard', function () { 
    $posts = \App\Models\Post::latest()->get();
    return view('dashboard',['posts' => $posts]); 
});

Route::post('/create-post',[PostController::class, 'createPost']);
Route::get('/edit-post/{post}',[PostController::class, 'showEditScreen']);
Route::put('/edit-post/{post}',[PostController::class, 'updatePost']);
Route::delete('/delete-post/{post}',[PostController::class, 'deletePost']);

Route::get('/', function () {
    return view('home');
});
Route::get('/temple', function () {
    return view('temple');
});
Route::get('/cafe', function () {
    return view('cafe');
});
Route::get('/hot_spot', function () {
    return view('hot_spot');
});
Route::get('/hotel', function () {
    return view('hotel');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/restaurant', function () {
    return view('restaurant');
});
