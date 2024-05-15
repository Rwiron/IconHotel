<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomImageController extends Controller
{
    public function show()
    {
        return view('Admin.addImage');
    }
}