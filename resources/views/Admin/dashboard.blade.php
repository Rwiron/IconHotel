@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        @php
            $greeting = '';
            $emoji = '';
            $time = date('H');

            if ($time < 12) {
                $greeting = 'Welcome to a beautiful morning';
                $emoji = '👋';
            } elseif ($time < 17) {
                $greeting = 'Good afternoon,';
                $emoji = '☕';
            } else {
                $greeting = 'Good evening,';
                $emoji = '🌙';
            }
        @endphp
        <h1>{{ $greeting }} {{ Auth::user()->username }} {{ $emoji }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="small-box bg-muted text-dark">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <h3>{{ $totalUsers }}</h3>
                    <a href="{{ route('admin.users.index') }}" class="text-dark">More info <i
                            class="bi bi-arrow-right-circle-fill"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="small-box bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Rooms</h5>
                    <h3>{{ $totalRooms }}</h3>
                    <a href="#" class="text-white">More info <i class="bi bi-arrow-right-circle-fill"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="small-box bg-info text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Admins</h5>
                    <h3>{{ $totalAdmins }}</h3>
                    <a href="#" class="text-white">More info <i class="bi bi-arrow-right-circle-fill"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="small-box bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Staffs</h5>
                    <h3>{{ $totalStaffs }}</h3>
                    <a href="#" class="text-white">More info <i class="bi bi-arrow-right-circle-fill"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="small-box bg-danger text-white">
                <div class="card-body">
                    <h5 class="card-title">Total Guests</h5>
                    <h3>{{ $totalGuests }}</h3>
                    <a href="#" class="text-white">More info <i class="bi bi-arrow-right-circle-fill"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="small-box bg-secondary text-white">
                <div class="card-body">
                    <h5 class="card-title">Occupied Rooms</h5>
                    <h3>{{ $occupiedRooms }}</h3>
                    <a href="#" class="text-white">More info <i class="bi bi-arrow-right-circle-fill"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="small-box bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title">Available Rooms</h5>
                    <h3>{{ $availableRooms }}</h3>
                    <a href="#" class="text-white">More info <i class="bi bi-arrow-right-circle-fill"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
