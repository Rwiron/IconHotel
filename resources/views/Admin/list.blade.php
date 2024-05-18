@extends('admin.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            @if ($rooms->isEmpty())
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        No rooms available.
                    </div>
                </div>
            @else
                @foreach ($rooms as $room)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm" style="height: 100%;">
                            <img src="{{ asset($room->photo) }}" alt="Room Image" class="card-img-top"
                                style="width: 100%; height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <small class="text-muted">{{ $room->price }} Rwf /Night</small>
                                <h5 class="card-title mt-2"><strong>{{ $room->type }} | {{ $room->location }}</strong>
                                </h5>
                                <div class="d-flex justify-content-between align-items-center my-2">
                                    <span><i class="bi bi-house-door-fill"></i> {{ $room->beds }} Bed</span>
                                    <span><i class="bi bi-bath-fill"></i> {{ $room->baths }} Bath</span>
                                    <span><i class="bi bi-wifi"></i> Wifi</span>
                                </div>
                                <div class="card-description">
                                    <p class="card-text">
                                        This room is currently <strong>{{ $room->status }}</strong>.
                                        It offers <strong>{{ $room->beds }} beds</strong> and <strong>{{ $room->baths }}
                                            baths</strong>,
                                        along with <strong>wifi</strong> and other amenities for your comfort.
                                    </p>
                                </div>
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <!-- Buttons with icons -->
                                            <a href="{{ route('admin.room.detail', $room->id) }}"
                                                class="btn btn-sm btn-outline-secondary" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="View Details">
                                                <i class="bi bi-eye-fill"></i>
                                            </a>
                                            <form action="{{ route('admin.room.destroy', $room->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <!-- Bootstrap Tooltip Activation Script -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
@endsection
