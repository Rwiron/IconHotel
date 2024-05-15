<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Staff\DashboardController as StaffDashboardController;
use App\Http\Controllers\Guest\DashboardController as GuestDashboardController;
use App\Http\Controllers\Room\RoomController;
use App\Http\Controllers\Room\ListRoomController;

use App\Http\Controllers\Website\webController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [webController::class, 'index'])->name('room');

// Route to show the registration form
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Route to handle the registration form submission
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');


// Display the login form
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/loginPage', [LoginController::class, 'showLoginForm'])->name('login');

// Handle login attempt
Route::post('/login', [LoginController::class, 'login'])->name('login.post');


// Admin dashboard route
Route::middleware(['auth', 'checkrole:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    //rooms
    Route::get('admin/room-management/add-room', [RoomController::class, 'create']);
    Route::post('admin/room-management/add-room', [RoomController::class, 'store'])->name('admin.rooms.store');
    Route::get('admin/room-management/list-room', [ListRoomController::class, 'list'])->name('admin.rooms.list');
});


// Staff dashboard route
Route::middleware(['auth', 'checkrole:staff'])->group(function () {
    Route::get('/staff/dashboard', [StaffDashboardController::class, 'index'])->name('staff.dashboard');
});

// Guest dashboard route
Route::middleware(['auth', 'checkrole:guest'])->group(function () {
    Route::get('/guest/dashboard', [GuestDashboardController::class, 'index'])->name('guest.dashboard');
});







// Home page route, you can change this to wherever you want users to land after registration or login