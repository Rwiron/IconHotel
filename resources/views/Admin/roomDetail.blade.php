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
                                    @foreach ($photos->take(6) as $photo)
                                        <div class="col-6 mb-3">
                                            <img src="{{ asset($photo->photo) }}" alt="Room Photo" class="img-fluid"
                                                style="width: 100%; height: 150px; object-fit: cover;">
                                        </div>
                                    @endforeach
                                    @if ($photos->count() > 6)
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" data-bs-toggle="modal"
                                                data-bs-target="#photosModal">Show all photos</button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <p class="card-text mt-3">
                            <strong>Room number:</strong> {{ $room->number }}<br>
                            <strong>Price:</strong> {{ number_format($room->price) }} Rwf /Night<br>
                            <strong>Status:</strong> {{ $room->status }}<br>
                            <strong>Beds:</strong> {{ $room->bed_type }}<br>
                            <strong>Available from:</strong>
                            {{ \Carbon\Carbon::parse($room->available_from)->format('Y-m-d h:i A') }}<br>
                            <strong> To:</strong>
                            {{ \Carbon\Carbon::parse($room->available_to)->format('Y-m-d h:i A') }}<br>
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

    <!-- Photos Modal -->
    <div class="modal fade" id="photosModal" tabindex="-1" aria-labelledby="photosModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="photosModalLabel">All Photos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @foreach ($photos as $photo)
                            <div class="col-6 mb-3">
                                <img src="{{ asset($photo->photo) }}" alt="Room Photo" class="img-fluid"
                                    style="width: 100%; height: 150px; object-fit: cover;">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
