<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomPhoto;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;

class RoomImageController extends Controller
{
    public function show()
    {
        $rooms = Room::all();
        return view('admin.addImage', compact('rooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'photos' => 'required',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $destinationPath = public_path('/images/rooms');
                $image->move($destinationPath, $imageName);
                $photoPath = "/images/rooms/" . $imageName;

                RoomPhoto::create([
                    'room_id' => $request->room_id,
                    'photo' => $photoPath,
                ]);
            }
        }

        Toastr::success('Images added successfully!');
        return redirect()->route('admin.rooms.list');
    }
}
