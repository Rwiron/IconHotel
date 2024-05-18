<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class webController extends Controller
{
    public function index()
    {
        // Fetch active rooms
        $rooms = Room::all();
        return view('frontend.home', compact('rooms'));
    }
}