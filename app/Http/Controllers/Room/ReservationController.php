<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create(Room $room)
    {
        return view('frontend.reserve', compact('room'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'checkin' => 'required|date',
            'checkout' => 'required|date|after:checkin',
            'guests' => 'required|integer|min:1'
        ]);

        // Handle the reservation logic here

        // Redirect or return with a success message
        return redirect()->route('home')->with('success', 'Reservation made successfully!');
    }
}