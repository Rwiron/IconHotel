<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yoeunes\Toastr\Facades\Toastr;

class RoomController extends Controller
{
    public function create()
    {
        return view('admin.addRoom');
    }

    public function store(Request $request)
    {
        // Validate the input and check for duplication
        $validator = $request->validate([
            'number' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|numeric',
            'status' => 'required|string|max:255',
            'description' => 'nullable|string',
            'size' => 'nullable|integer',
            'bed_type' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'floor' => 'nullable|integer',
            'location' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Check if the room with the same number and location already exists
        $existingRoom = Room::where('number', $request->number)
            ->where('location', $request->location)
            ->first();

        if ($existingRoom) {
            Toastr::error('A room with the same number and location already exists!');
            return redirect()->back()->withInput();
        }

        // Create new room with validated data except 'photo'
        $room = new Room($request->except(['photo']));

        // Handle file upload
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $imageName);
            $photoPath = "/images/" . $imageName;
            // Set the path to the 'photo' field of the room
            $room->photo = $photoPath;
        }

        $room->save();

        // Use Toastr to notify about successful creation
        Toastr::success('Room added successfully!');

        return redirect()->route('admin.rooms.list');  // Adjust the redirection as necessary
    }
}