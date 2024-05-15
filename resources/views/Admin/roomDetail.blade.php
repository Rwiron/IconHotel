@extends('admin.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $room->type }} | {{ $room->location }}</h5>
                        <div class="row">
                            <div class="col-lg-7">
                                <img src="{{ asset($room->photo) }}" alt="Room Image" class="img-fluid mb-3"
                                    style="width: 100%; height: auto; object-fit: cover;">
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    @foreach ($photos as $photo)
                                        <div class="col-6 mb-3">
                                            <img src="{{ asset($photo->photo) }}" alt="Room Photo" class="img-fluid"
                                                style="width: 100%; height: 150px; object-fit: cover;">
                                        </div>
                                    @endforeach
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100">Show all photos</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-text mt-3">
                            <strong>Room number:</strong> {{ $room->number }}<br>
                            <strong>Price:</strong> {{ $room->price }} Rwf /Night<br>
                            <strong>Status:</strong> {{ $room->status }}<br>
                            <strong>Beds:</strong> {{ $room->bed_type }} Room<br>
                            <strong>Available from:</strong> {{ $room->available_from }}<br>
                            <strong> To:</strong> {{ $room->available_to }}<br>
                            <strong>Description:</strong> {{ $room->description }}<br>
                        </p>
                        <hr>
                        <h5>Services</h5>
                        <ul class="list-unstyled">
                            @foreach ($services as $service)
                                <li>
                                    <i class="bi bi-check-circle-fill"></i> <strong>{{ $service->service_name }}</strong>:
                                    {{ $service->service_description }}
                                </li>
                            @endforeach
                        </ul>
                        <hr>
                        <h5>Additional Information</h5>
                        <p>
                            For the first time ever, and for just one night, the museum's iconic clock room will be
                            transformed into a bedroom...
                        </p>
                        <button class="btn btn-primary">Book Room</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
