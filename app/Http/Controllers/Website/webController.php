<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomPhoto;
use App\Models\RoomService;
use Illuminate\Http\Request;

class webController extends Controller
{
    public function index()
    {
        // Fetch active rooms
        $rooms = Room::all();
        return view('frontend.home', compact('rooms'));
    }

    public function show($id)
    {
        // Fetch room details by ID
        $room = Room::findOrFail($id);
        $photos = RoomPhoto::where('room_id', $id)->get();
        $services = RoomService::where('room_id', $id)->get();

        return view('frontend.roomDetail', compact('room', 'photos', 'services'));
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function about()
    {
        return view('frontend.about');
    }
}