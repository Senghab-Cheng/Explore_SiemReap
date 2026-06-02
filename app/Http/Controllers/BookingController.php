<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function createBooking(Request $request){
        $incomingFields = $request->validate([
            'tour_id'      => 'required',
            'booking_date' => 'required',
            'num_people'   => 'required',
        ]);

        $incomingFields['user_id'] = auth()->id();
        $incomingFields['status']  = 'pending';

        Booking::create($incomingFields);
        return redirect('/bookings');
    }

    public function showEditScreen(Booking $booking){
        if(auth()->user()->id !== $booking['user_id']){
            return redirect('/');
        }
        return view('bookings.edit', ['booking' => $booking]);
    }

    public function updateBooking(Booking $booking, Request $request){
        if(auth()->user()->id !== $booking['user_id']){
            return redirect('/');
        }

        $incomingFields = $request->validate([
            'booking_date' => 'required',
            'num_people'   => 'required',
        ]);

        $booking->update($incomingFields);
        return redirect('/bookings');
    }

    public function deleteBooking(Booking $booking){
        if(auth()->user()->id === $booking['user_id']){
            $booking->delete();
        }
        return redirect('/bookings');
    }
}
