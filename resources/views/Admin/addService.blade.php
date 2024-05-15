@extends('admin.layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Add Services to Room</h5>
                        <form action="{{ route('admin.room-services.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="room_id" class="form-label">Select Room</label>
                                <select class="form-control" id="room_id" name="room_id" required>
                                    @foreach ($rooms as $room)
                                        <option value="{{ $room->id }}">{{ $room->number }} - {{ $room->type }} -
                                            {{ $room->location }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="service_name" class="form-label">Service Name</label>
                                <input type="text" class="form-control" id="service_name" name="service_name" required
                                    placeholder="Enter the service name">
                            </div>
                            <div class="mb-3">
                                <label for="service_description" class="form-label">Service Description</label>
                                <textarea class="form-control" id="service_description" name="service_description" required
                                    placeholder="Enter the service description"></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Add Service</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Room Services</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Room</th>
                                    <th scope="col">Service Name</th>
                                    <th scope="col">Service Description</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->room->number }} - {{ $service->room->type }} -
                                            {{ $service->room->location }}</td>
                                        <td>{{ $service->service_name }}</td>
                                        <td>{{ $service->service_description }}</td>
                                        <td>
                                            <form action="{{ route('admin.room-services.destroy', $service->id) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="bi bi-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
