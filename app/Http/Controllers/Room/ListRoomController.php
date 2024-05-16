<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;

class ListRoomController extends Controller
{
    public function list()
    {
        $rooms = Room::all();  // Fetch all rooms
        return view('admin.list', compact('rooms'));  // Pass the rooms to the view
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        Toastr::success('Room deleted successfully!');
        return redirect()->route('admin.rooms.list');
    }
}