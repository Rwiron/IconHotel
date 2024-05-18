@extends('admin.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Edit Staff Member</h5>
                <form action="{{ route('admin.staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                value="{{ $staff->first_name }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name"
                                value="{{ $staff->last_name }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $staff->email }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                value="{{ $staff->phone_number }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="position" class="form-label">Position</label>
                            <select class="form-control" id="position" name="position" required>
                                <option value="" disabled>Select Position</option>
                                <option value="Software Developer"
                                    {{ $staff->position == 'Software Developer' ? 'selected' : '' }}>Software Developer
                                </option>
                                <option value="System Administrator"
                                    {{ $staff->position == 'System Administrator' ? 'selected' : '' }}>System Administrator
                                </option>
                                <option value="Accountant" {{ $staff->position == 'Accountant' ? 'selected' : '' }}>
                                    Accountant</option>
                                <option value="HR Manager" {{ $staff->position == 'HR Manager' ? 'selected' : '' }}>HR
                                    Manager</option>
                                <option value="Receptionist" {{ $staff->position == 'Receptionist' ? 'selected' : '' }}>
                                    Receptionist</option>
                                <option value="Maintenance Worker"
                                    {{ $staff->position == 'Maintenance Worker' ? 'selected' : '' }}>Maintenance Worker
                                </option>
                                <option value="Housekeeper" {{ $staff->position == 'Housekeeper' ? 'selected' : '' }}>
                                    Housekeeper</option>
                                <!-- Add more positions as needed -->
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="department" class="form-label">Department</label>
                            <select class="form-control" id="department" name="department" required>
                                <option value="" disabled>Select Department</option>
                                <option value="IT" {{ $staff->department == 'IT' ? 'selected' : '' }}>IT</option>
                                <option value="Finance" {{ $staff->department == 'Finance' ? 'selected' : '' }}>Finance
                                </option>
                                <option value="Human Resources"
                                    {{ $staff->department == 'Human Resources' ? 'selected' : '' }}>Human Resources
                                </option>
                                <option value="Front Desk" {{ $staff->department == 'Front Desk' ? 'selected' : '' }}>Front
                                    Desk</option>
                                <option value="Maintenance" {{ $staff->department == 'Maintenance' ? 'selected' : '' }}>
                                    Maintenance</option>
                                <option value="Housekeeping" {{ $staff->department == 'Housekeeping' ? 'selected' : '' }}>
                                    Housekeeping</option>
                                <!-- Add more departments as needed -->
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="salary" class="form-label">Salary</label>
                            <input type="number" class="form-control" id="salary" name="salary"
                                value="{{ $staff->salary }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="hire_date" class="form-label">Hire Date</label>
                            <input type="date" class="form-control" id="hire_date" name="hire_date"
                                value="{{ $staff->hire_date }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="birth_date" class="form-label">Birth Date</label>
                            <input type="date" class="form-control" id="birth_date" name="birth_date"
                                value="{{ $staff->birth_date }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="Male" {{ $staff->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ $staff->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ $staff->gender == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                            @if ($staff->photo)
                                <img src="{{ asset($staff->photo) }}" alt="{{ $staff->first_name }}" width="100"
                                    class="mt-2">
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="Active" {{ $staff->status == 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="On Leave" {{ $staff->status == 'On Leave' ? 'selected' : '' }}>On Leave
                                </option>
                                <option value="Terminated" {{ $staff->status == 'Terminated' ? 'selected' : '' }}>
                                    Terminated</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Staff Member</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
