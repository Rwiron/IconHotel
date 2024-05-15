@extends('admin.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            @foreach ($rooms as $room)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm" style="height: 100%;">
                        <img src="{{ asset($room->photo) }}" alt="Room Image" class="card-img-top"
                            style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <p class="card-text"><strong>{{ $room->type }} | {{ $room->location }}</strong></p>
                            <div class="mt-auto">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning">View
                                            Details</button>
                                        <button type="button" class="btn btn-dark">Book Now</button>
                                    </div>
                                    <small class="text-muted">${{ $room->price }}/Night</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
