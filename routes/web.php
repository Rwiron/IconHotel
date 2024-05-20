<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Staff\DashboardController as StaffDashboardController;
use App\Http\Controllers\Guest\DashboardController as GuestDashboardController;
use App\Http\Controllers\Room\RoomController;
use App\Http\Controllers\Room\ListRoomController;
use App\Http\Controllers\Room\RoomImageController;
use App\Http\Controllers\Room\ReservationController;
use App\Http\Controllers\Room\RoomServiceController;
use App\Http\Controllers\Room\RoomDetailController;
use App\Http\Controllers\Staff\AddStaffController;
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
Route::get('/room/{id}', [WebController::class, 'show'])->name('room.detail');
Route::get('/services', [WebController::class, 'services'])->name('services');
Route::get('/about', [WebController::class, 'about'])->name('about');
// Route::get('/reserve/{room}', [ReservationController::class, 'create'])->name('reserve.create');
// Route::post('/reserve', [ReservationController::class, 'store'])->name('reserve.store');

// Reservation routes
Route::middleware(['auth', 'checkrole:guest'])->group(function () {
    Route::get('/reserve/{room}', [ReservationController::class, 'create'])->name('reserve.create');
    Route::post('/reserve', [ReservationController::class, 'store'])->name('reserve.store');
});


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

    //Admin Manage many image route
    Route::prefix('admin')->group(function () {
        Route::get('room-management/add-room-images', [RoomImageController::class, 'show'])->name('admin.room-images.show');
        Route::post('room-management/add-room-images', [RoomImageController::class, 'store'])->name('admin.room-images.store');
    });

    //Admin manage Services route
    Route::prefix('admin')->group(function () {
        Route::get('room-management/add-room-service', [RoomServiceController::class, 'show'])->name('admin.room-services.show');
        Route::post('room-management/add-room-service', [RoomServiceController::class, 'store'])->name('admin.room-services.store');
        Route::delete('room-management/delete-room-service/{id}', [RoomServiceController::class, 'destroy'])->name('admin.room-services.destroy');
    });

    Route::prefix('admin')->group(function () {
        Route::get('room-management/list-rooms', [ListRoomController::class, 'list'])->name('admin.rooms.list');
        Route::get('room-management/room-detail/{id}', [RoomDetailController::class, 'detail'])->name('admin.room.detail');
        Route::delete('room-management/delete-room/{id}', [ListRoomController::class, 'destroy'])->name('admin.room.destroy');
    });

    Route::prefix('admin')->group(function () {
        Route::get('staff', [AddStaffController::class, 'index'])->name('admin.staff.index');
        Route::get('staff/create', [AddStaffController::class, 'create'])->name('admin.staff.create');
        Route::post('staff', [AddStaffController::class, 'store'])->name('admin.staff.store');
        Route::get('staff/{id}/edit', [AddStaffController::class, 'edit'])->name('admin.staff.edit');
        Route::put('staff/{id}', [AddStaffController::class, 'update'])->name('admin.staff.update');
        Route::delete('staff/{id}', [AddStaffController::class, 'destroy'])->name('admin.staff.destroy');
    });

    //user management
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('users', UserController::class);
    });

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