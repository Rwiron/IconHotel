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
@endsection
