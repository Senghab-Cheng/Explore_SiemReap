<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function createTour(Request $request){
        $incomingFields = $request->validate([
            'name'        => 'required',
            'description' => 'required',
            'location'    => 'required',
            'price'       => 'required',
            'duration'    => 'required',
        ]);

        $incomingFields['name']        = strip_tags($incomingFields['name']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);
        $incomingFields['location']    = strip_tags($incomingFields['location']);
        $incomingFields['duration']    = strip_tags($incomingFields['duration']);

        Tour::create($incomingFields);
        return redirect('/tours');
    }

    public function showEditScreen(Tour $tour){
        return view('tours.edit', ['tour' => $tour]);
    }

    public function updateTour(Tour $tour, Request $request){
        $incomingFields = $request->validate([
            'name'        => 'required',
            'description' => 'required',
            'location'    => 'required',
            'price'       => 'required',
            'duration'    => 'required',
        ]);

        $incomingFields['name']        = strip_tags($incomingFields['name']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);
        $incomingFields['location']    = strip_tags($incomingFields['location']);
        $incomingFields['duration']    = strip_tags($incomingFields['duration']);

        $tour->update($incomingFields);
        return redirect('/tours');
    }

    public function deleteTour(Tour $tour){
        $tour->delete();
        return redirect('/tours');
    }
}
