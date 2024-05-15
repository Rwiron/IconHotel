@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add New Room</h5>
                    <!-- Added enctype attribute for file uploads -->
                    <form method="POST" action="{{ route('admin.rooms.store') }}" enctype="multipart/form-data">
                        @csrf <!-- CSRF token for security -->

                        <div class="mb-3">
                            <label for="number" class="form-label">Room Number</label>
                            <input type="text" class="form-control" id="number" name="number" required>
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Room Type</label>
                            <input type="text" class="form-control" id="type" name="type" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" required>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="Available">Available</option>
                                <option value="Occupied">Occupied</option>
                                <option value="Maintenance">Maintenance</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="size" class="form-label">Size (sq ft)</label>
                            <input type="number" class="form-control" id="size" name="size">
                        </div>

                        <div class="mb-3">
                            <label for="bed_type" class="form-label">Bed Type</label>
                            <input type="text" class="form-control" id="bed_type" name="bed_type" required>
                        </div>

                        <div class="mb-3">
                            <label for="capacity" class="form-label">Capacity</label>
                            <input type="number" class="form-control" id="capacity" name="capacity" required>
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label">Room Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label for="floor" class="form-label">Floor Number</label>
                            <input type="number" class="form-control" id="floor" name="floor">
                        </div>

                        <button type="submit" class="btn btn-primary">Add Room</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
