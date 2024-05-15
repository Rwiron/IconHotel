@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        @php
            $hour = date('H');
            $greeting = '';
            $emoji = '';

            if ($hour < 12) {
                $greeting = 'Good morning';
                $emoji = '👋';
            } elseif ($hour < 17) {
                $greeting = 'Good afternoon';
                $emoji = '☕';
            } else {
                $greeting = 'Good evening';
                $emoji = '🌙';
            }
        @endphp

        <h1>{{ $greeting }}, {{ Auth::user()->username }} {{ $emoji }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
@endsection
