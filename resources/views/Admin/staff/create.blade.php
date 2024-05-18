@extends('admin.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Add Staff Member</h5>
                <form action="{{ route('admin.staff.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="col-md-4">
                            <label for="position" class="form-label">Position</label>
                            <select class="form-control" id="position" name="position" required>
                                <option value="" disabled selected>Select Position</option>
                                <option value="Software Developer">Software Developer</option>
                                <option value="System Administrator">System Administrator</option>
                                <option value="Accountant">Accountant</option>
                                <option value="HR Manager">HR Manager</option>
                                <option value="Receptionist">Receptionist</option>
                                <option value="Maintenance Worker">Maintenance Worker</option>
                                <option value="Housekeeper">Housekeeper</option>
                                <!-- Add more positions as needed -->
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="department" class="form-label">Department</label>
                            <select class="form-control" id="department" name="department" required>
                                <option value="" disabled selected>Select Department</option>
                                <option value="IT">IT</option>
                                <option value="Finance">Finance</option>
                                <option value="Human Resources">Human Resources</option>
                                <option value="Front Desk">Front Desk</option>
                                <option value="Maintenance">Maintenance</option>
                                <option value="Housekeeping">Housekeeping</option>
                                <!-- Add more departments as needed -->
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="salary" class="form-label">Salary</label>
                            <input type="number" class="form-control" id="salary" name="salary" required>
                        </div>
                        <div class="col-md-4">
                            <label for="hire_date" class="form-label">Hire Date</label>
                            <input type="date" class="form-control" id="hire_date" name="hire_date" required>
                        </div>
                        <div class="col-md-4">
                            <label for="birth_date" class="form-label">Birth Date</label>
                            <input type="date" class="form-control" id="birth_date" name="birth_date" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                        </div>
                        <div class="col-md-4">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="Active">Active</option>
                                <option value="On Leave">On Leave</option>
                                <option value="Terminated">Terminated</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Add Staff Member</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
