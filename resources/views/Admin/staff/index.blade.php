@extends('admin.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="pagetitle">
            <h1>Staff Members</h1>
            <a href="{{ route('admin.staff.create') }}" class="btn btn-primary">Add Staff Member</a>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Position</th>
                                <th>Department</th>
                                <th>Hire Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($staff as $member)
                                <tr>
                                    <td>{{ $member->id }}</td>
                                    <td><img src="{{ asset($member->photo) }}" alt="{{ $member->first_name }}" width="50"
                                            class="rounded-circle"></td>
                                    <td>{{ $member->first_name }} {{ $member->last_name }}</td>
                                    <td>{{ $member->email }}</td>
                                    <td>{{ $member->phone_number }}</td>
                                    <td>{{ $member->position }}</td>
                                    <td>{{ $member->department }}</td>
                                    <td>{{ $member->hire_date }}</td>
                                    <td>
                                        <span
                                            class="badge {{ $member->status == 'Active' ? 'bg-success' : ($member->status == 'On Leave' ? 'bg-warning' : 'bg-danger') }}">
                                            {{ $member->status }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.staff.edit', $member->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <form action="{{ route('admin.staff.destroy', $member->id) }}" method="POST"
                                            class="d-inline">
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
@endsection
