<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalRooms = Room::count();
        $totalAdmins = User::where('role', 'admin')->count();
        $totalStaffs = User::where('role', 'staff')->count();
        $totalGuests = User::where('role', 'guest')->count();
        $occupiedRooms = Room::where('status', 'Occupied')->count();
        $availableRooms = Room::where('status', 'Available')->count();

        return view('admin.dashboard', compact('totalUsers', 'totalRooms', 'totalAdmins', 'totalStaffs', 'totalGuests','occupiedRooms','availableRooms'));
    }
}