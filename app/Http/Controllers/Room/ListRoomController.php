<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class ListRoomController extends Controller
{
    public function list()
    {
        $rooms = Room::all();  // Fetch all rooms
        return view('Admin.list', compact('rooms'));  // Pass the rooms to the view
    }
}