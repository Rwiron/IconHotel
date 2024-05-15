<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomService;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;

class RoomServiceController extends Controller
{
    public function show()
    {
        $rooms = Room::all();
        $services = RoomService::with('room')->get(); // Fetch services with room information
        return view('admin.addService', compact('rooms', 'services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'service_name' => 'required|string|max:255',
            'service_description' => 'required|string',
        ]);

        RoomService::create([
            'room_id' => $request->room_id,
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
        ]);

        Toastr::success('Service added successfully!');
        return redirect()->route('admin.room-services.show');
    }
    public function destroy($id)
    {
        $service = RoomService::findOrFail($id);
        $service->delete();

        Toastr::success('Service deleted successfully!');
        return redirect()->route('admin.room-services.show');
    }
}