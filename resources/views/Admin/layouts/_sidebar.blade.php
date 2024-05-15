<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Common Dashboard Access for All Users -->
        {{-- <li class="nav-item">
            <a class="nav-link {{ Request::segment(1) == 'dashboard' ? '' : 'collapsed' }}"
                href="{{ url('/admin/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav --> --}}

        @if (Auth::user()->role === 'admin')
            <!-- Admin Specific Links -->
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(1) == 'dashboard' ? '' : 'collapsed' }}"
                    href="{{ url('/admin/dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link {{ in_array(Request::segment(1), ['room-management', 'add-room', 'list-room']) ? '' : 'collapsed' }}"
                    data-bs-target="#room-mgmt-dropdown" data-bs-toggle="collapse">
                    <i class="bi bi-house-door"></i>
                    <span>Room Management</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="room-mgmt-dropdown"
                    class="nav-content collapse {{ in_array(Request::segment(1), ['room-management', 'add-room', 'list-room']) ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('admin/room-management/add-room') }}"
                            class="{{ Request::is('room-management/add-room') ? 'active' : '' }}">
                            <i class="bi bi-plus-circle"></i><span>Add Room</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/room-management/list-room') }}"
                            class="{{ Request::is('room-management/list-room') ? 'active' : '' }}">
                            <i class="bi bi-list"></i><span>List Rooms</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('room-management/edit-room') }}"
                            class="{{ Request::is('room-management/edit-room') ? 'active' : '' }}">
                            <i class="bi bi-pencil"></i><span>Edit Rooms</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Room Management Nav -->

            <li class="nav-item">
                <a class="nav-link {{ in_array(Request::segment(1), ['staff-management', 'add-staff', 'list-staff']) ? '' : 'collapsed' }}"
                    data-bs-target="#staff-mgmt-dropdown" data-bs-toggle="collapse">
                    <i class="bi bi-person-badge"></i>
                    <span>Staff Management</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="staff-mgmt-dropdown"
                    class="nav-content collapse {{ in_array(Request::segment(1), ['staff-management', 'add-staff', 'list-staff']) ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('staff-management/add-staff') }}"
                            class="{{ Request::is('staff-management/add-staff') ? 'active' : '' }}">
                            <i class="bi bi-plus-circle"></i><span>Add Staff</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('staff-management/list-staff') }}"
                            class="{{ Request::is('staff-management/list-staff') ? 'active' : '' }}">
                            <i class="bi bi-list"></i><span>List Staff</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('staff-management/edit-staff') }}"
                            class="{{ Request::is('staff-management/edit-staff') ? 'active' : '' }}">
                            <i class="bi bi-pencil"></i><span>Edit Staff</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Staff Management Nav -->



            <li class="nav-item">
                <a class="nav-link {{ in_array(Request::segment(1), ['booking-reports', 'view-reports', 'financial-reports']) ? '' : 'collapsed' }}"
                    data-bs-target="#booking-reports-dropdown" data-bs-toggle="collapse">
                    <i class="bi bi-file-earmark-text"></i>
                    <span>Booking Reports</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="booking-reports-dropdown"
                    class="nav-content collapse {{ in_array(Request::segment(1), ['booking-reports', 'view-reports', 'financial-reports']) ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('booking-reports/overview') }}"
                            class="{{ Request::is('booking-reports/overview') ? 'active' : '' }}">
                            <i class="bi bi-bar-chart"></i><span>Overview of Bookings</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('booking-reports/financial') }}"
                            class="{{ Request::is('booking-reports/financial') ? 'active' : '' }}">
                            <i class="bi bi-currency-dollar"></i><span>Financial Reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('booking-reports/details') }}"
                            class="{{ Request::is('booking-reports/details') ? 'active' : '' }}">
                            <i class="bi bi-journal-text"></i><span>Detailed Reports</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Booking Reports Nav -->

            <li class="nav-item">
                <a class="nav-link {{ in_array(Request::segment(1), ['event-management', 'create-event', 'list-events']) ? '' : 'collapsed' }}"
                    data-bs-target="#event-mgmt-dropdown" data-bs-toggle="collapse">
                    <i class="bi bi-calendar-event"></i>
                    <span>Event Management</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="event-mgmt-dropdown"
                    class="nav-content collapse {{ in_array(Request::segment(1), ['event-management', 'create-event', 'list-events']) ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('event-management/create-event') }}"
                            class="{{ Request::is('event-management/create-event') ? 'active' : '' }}">
                            <i class="bi bi-plus-circle"></i><span>Create Event</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('event-management/list-events') }}"
                            class="{{ Request::is('event-management/list-events') ? 'active' : '' }}">
                            <i class="bi bi-list-check"></i><span>List Events</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('event-management/event-reports') }}"
                            class="{{ Request::is('event-management/event-reports') ? 'active' : '' }}">
                            <i class="bi bi-graph-up"></i><span>Event Reports</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Event Management Nav -->
        @endif

        @if (Auth::user()->role === 'staff')
            <!-- Staff Specific Links -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('task-list') }}">
                    <i class="bi bi-list-check"></i>
                    <span>Task List</span>
                </a>
            </li><!-- End Tasks Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('manage-bookings') }}">
                    <i class="bi bi-calendar-check"></i>
                    <span>Manage Bookings</span>
                </a>
            </li><!-- End Manage Bookings Nav -->
        @endif

        @if (Auth::user()->role === 'guest')
            <!-- Guest Specific Links -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('my-bookings') }}">
                    <i class="bi bi-journal-bookmark"></i>
                    <span>My Bookings</span>
                </a>
            </li><!-- End My Bookings Nav -->
        @endif

        <!-- Common Profile and Contact Links -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('profile') }}">
                <i class="bi bi-person-circle"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('contact') }}">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
