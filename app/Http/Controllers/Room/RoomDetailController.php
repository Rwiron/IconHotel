<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomPhoto;
use App\Models\RoomService;
use Illuminate\Http\Request;

class RoomDetailController extends Controller
{
    public function detail($id)
    {
        $room = Room::findOrFail($id);
        $photos = RoomPhoto::where('room_id', $id)->get();
        $services = RoomService::where('room_id', $id)->get();
        return view('admin.roomDetail', compact('room', 'photos', 'services'));
    }
}