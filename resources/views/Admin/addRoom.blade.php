@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Example Room Data to be Saved 📋</h5>
                    <ul>
                        <li>🏷️ <strong>Room Number:</strong> Room 101</li>
                        <li>🏠 <strong>Room Type:</strong> Deluxe Room</li>
                        <li>💲 <strong>Price:</strong> 150.00</li>
                        <li>✅ <strong>Status:</strong> Available</li>
                        <li>📝 <strong>Description:</strong> A spacious deluxe room with a beautiful city view, equipped
                            with all modern amenities including high-speed wifi, minibar, and air conditioning.</li>
                        <li>📐 <strong>Size:</strong> 35 (square meters)</li>
                        <li>🛏️ <strong>Bed Type:</strong> King Bed</li>
                        <li>👥 <strong>Capacity:</strong> 2</li>
                        <li>🏢 <strong>Floor:</strong> From 0 to 50</li>
                        <li>📍 <strong>Location:</strong> Kicukiro or Kibagabaga</li>
                        <li>📸 <strong>Photo:</strong> Upload an image of the room (e.g., deluxe_room_101.jpg)</li>

                    </ul>
                </div>
            </div>
        </div>
        <br>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add New Room</h5>
                    <!-- Added enctype attribute for file uploads -->
                    <form method="POST" action="{{ route('admin.rooms.store') }}" enctype="multipart/form-data">
                        @csrf <!-- CSRF token for security -->

                        <div class="mb-3">
                            <label for="number" class="form-label">Room Number</label>
                            <input type="text" class="form-control" id="number" name="number"
                                placeholder="Please Save Room number eg like Room 1">
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Room Type</label>
                            <select class="form-control" id="type" name="type">
                                <option value="Single Room">Single Room</option>
                                <option value="Double Room">Double Room</option>
                                <option value="Twin Room">Twin Room</option>
                                <option value="Triple Room">Triple Room</option>
                                <option value="Quad Room">Quad Room</option>
                                <option value="Queen Room">Queen Room</option>
                                <option value="King Room">King Room</option>
                                <option value="Studio Room">Studio Room</option>
                                <option value="Junior Suite">Junior Suite</option>
                                <option value="Executive Suite">Executive Suite</option>
                                <option value="Presidential Suite">Presidential Suite</option>
                                <option value="Family Room">Family Room</option>
                                <option value="Accessible Room">Accessible Room</option>
                                <option value="Connecting Rooms">Connecting Rooms</option>
                                <option value="Deluxe Room">Deluxe Room</option>
                                <option value="Villa">Villa</option>
                                <option value="Cabana">Cabana</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" required
                                placeholder="Enter the price per night">
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" required
                                placeholder="Please Enter Location">
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
                            <textarea class="form-control" id="description" name="description"
                                placeholder="Description and more detail for room needed"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="size" class="form-label">Size (sq ft)</label>
                            <input type="number" class="form-control" id="size" name="size"
                                placeholder="Enter the size of the room in square meters">
                        </div>

                        <div class="mb-3">
                            <label for="bed_type" class="form-label">Bed Type</label>
                            <select class="form-control" id="bed_type" name="bed_type" required>
                                <option value="single">Single Bed</option>
                                <option value="double">Double Bed</option>
                                <option value="queen">Queen Bed</option>
                                <option value="king">King Bed</option>
                                <option value="twin">Twin Bed</option>
                                <option value="bunk">Bunk Bed</option>
                                <option value="sofa">Sofa Bed</option>
                                <option value="murphy">Murphy Bed</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="capacity" class="form-label">Capacity</label>
                            <input type="number" class="form-control" id="capacity" name="capacity" required
                                placeholder="Enter the maximum capacity of the room">
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label">Room Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label for="floor" class="form-label">Floor Number</label>
                            <input type="number" class="form-control" id="floor" name="floor"
                                placeholder="Please enter Room floor if none located leave with zero eg `0 or 1 or 2 or 3 or 4 up the Highest Floor of Building` ">
                        </div>

                        <button type="submit" class="btn btn-primary">Add Room</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
