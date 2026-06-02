<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
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