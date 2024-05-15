@extends('admin.layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Add Images to Room</h5>
                        <form action="{{ route('admin.room-images.store') }}" method="POST" enctype="multipart/form-data">
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
                                <label for="photos" class="form-label">Photos</label>
                                <input type="file" class="form-control" id="photos" name="photos[]" multiple required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Add Images</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
