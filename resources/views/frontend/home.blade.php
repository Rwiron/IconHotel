<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Icon Place - Hotel HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/favicon.ico') }}" rel="icon" />

    <!-- Google Web Fonts -->
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    {{-- <a href="index.html"
                        class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('frontend/img/IconPlace.png') }}" alt="Icon Place Logo" class="navbar-logo">
                        <span class="text-primary text-uppercase ms-2">Icon Place</span>
                    </a> --}}


                    <!-- Navigation Bar Brand Logo -->
                    <a href="index.html"
                        class="navbar-brand d-flex flex-column align-items-center justify-content-center">
                        <img src="{{ asset('frontend/img/icon.png') }}" alt="Brand Icon">
                    </a>


                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">manirahoremy@gmail.com</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+250 788 598 533</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Icon Place</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                {{-- <a href="index.html" class="nav-item nav-link">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link">Services</a> --}}
                                <a href="/" class="nav-item nav-link active">Home</a>
                                {{-- <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle"
                                        data-bs-toggle="dropdown">Room</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking.html" class="dropdown-item">Booking</a>
                                        <a href="team.html" class="dropdown-item">Our Team</a>
                                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    </div>
                                </div> --}}
                                <a href="{{ route('about') }}" class="nav-item nav-link">About US</a>
                                <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="ms-auto">
                                <a href="/loginPage" class="btn btn-primary">Login</a>
                                <a href="/register" class="btn btn-outline-light ms-2">Register</a>
                            </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0"
            style="background-image: url({{ asset('frontend/img/carousel-1.jpg') }});">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">
                        Icon Place
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">
                                Rooms
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px">
                    <!-- Title for Booking Section -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <h2 class="text-center text-primary">Check Availability and Book</h2>
                        </div>
                    </div>
                    <!-- Booking Form Rows -->
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-4">
                                <div class="col-md-3">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Check in" data-target="#date1"
                                            data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Check out" data-target="#date2"
                                            data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Adult</option>
                                        <option value="1">Adult 1</option>
                                        <option value="2">Adult 2</option>
                                        <option value="3">Adult 3</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Child</option>
                                        <option value="1">Child 1</option>
                                        <option value="2">Child 2</option>
                                        <option value="3">Child 3</option>
                                    </select>
                                </div>
                                <!-- New Province and Location Selectors -->
                                <div class="col-md-3">
                                    <select class="form-select" id="province">
                                        <option selected>Select Province</option>
                                        <option value="Province1">Province 1</option>
                                        <option value="Province2">Province 2</option>
                                        <option value="Province3">Province 3</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" id="location">
                                        <option selected>Select District</option>
                                        <option value="Location1">Location 1</option>
                                        <option value="Location2">Location 2</option>
                                        <option value="Location3">Location 3</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Booking End -->

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12"> <!-- Adjusted to use full width for text-centered focus -->
                        <header>
                            <h6 class="section-title text-start text-primary text-uppercase">
                                About Us
                            </h6>
                            <h1 class="mb-4">
                                Welcome to <span class="text-primary text-uppercase">Icon Place</span>
                            </h1>
                        </header>
                        <p class="mb-4">
                            Booking our private rooms at your convenient time and location. A Retreat into Nature.
                        </p>
                        <p class="mb-4">
                            Welcome to Icon Places, where hospitality meets nature in a harmonious blend of luxury and
                            tranquility. We aim to create a sanctuary where the beauty of nature converges with the
                            comforts of modern luxury, offering a truly exceptional hospitality experience. At Icon
                            Places, your experience goes beyond accommodation; it's an invitation to discover a retreat
                            that is uniquely ours and, soon, yours to explore. We look forward to welcoming you to a
                            world where hospitality is an art, and nature is our greatest inspiration.
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check text-primary me-2"></i>Private Retreat</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Private Gate</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Private Compound</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Security</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Hot & Cold Water</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Living room</li>
                            <li><i class="fa fa-check text-primary me-2"></i>24/7 Room service</li>
                            <li><i class="fa fa-check text-primary me-2"></i>Equipped Kitchen</li>
                        </ul>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="#">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">
                        Our Rooms
                    </h6>
                    <h1 class="mb-5">
                        Explore Our <span class="text-primary text-uppercase">Rooms</span> from different Locations
                    </h1>
                </div>
                <div class="row g-4">
                    @if ($rooms->isEmpty())
                        <div class="col-12">
                            <div class="alert alert-info text-center">
                                No rooms available.
                            </div>
                        </div>
                    @else
                        @foreach ($rooms->take(12) as $room)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="room-item shadow rounded overflow-hidden" style="height: 100%;">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="{{ asset($room->photo) }}" alt="Room Image"
                                            style="height: 250px; object-fit: cover; width: 100%;" />
                                        <small
                                            class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">
                                            {{ $room->price }} Rwf/Night
                                        </small>
                                    </div>
                                    <div class="p-4 mt-2" style="flex: 1;">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0">{{ $room->type }} | {{ $room->location }}</h5>
                                            <div class="ps-2">
                                                @for ($i = 0; $i < 5; $i++)
                                                    <small class="fa fa-star text-primary"></small>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <small class="border-end me-3 pe-3"><i
                                                    class="fa fa-bed text-primary me-2"></i>{{ $room->beds }}
                                                Bed</small>
                                            <small class="border-end me-3 pe-3"><i
                                                    class="fa fa-bath text-primary me-2"></i>{{ $room->baths }}
                                                Bath</small>
                                            <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                        </div>
                                        <p class="text-body mb-3">
                                            {{ \Illuminate\Support\Str::limit($room->description, 100, $end = '...') }}
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-sm btn-primary rounded py-2 px-4"
                                                href="{{ route('room.detail', $room->id) }}">View Detail</a>
                                            {{-- <a class="btn btn-sm btn-dark rounded py-2 px-4" href="#">Book
                                                Now</a> --}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <!-- Room End -->




        <!-- Testimonial Start -->
        <div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s"
            style="margin-bottom: 90px">
            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>
                            Tempor stet labore dolor clita stet diam amet ipsum dolor duo
                            ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet
                            est kasd kasd et erat magna eos
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded"
                                src="{{ asset('frontend/img/testimonial-1.jpg') }}"
                                style="width: 45px; height: 45px" />

                            {{-- <img class="img-fluid flex-shrink-0 rounded"
                                src="{{ asset('frontend/img/testimonial-1.jpg') }}" alt="Testimonial Image" /> --}}

                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                        <i
                            class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>
                            Tempor stet labore dolor clita stet diam amet ipsum dolor duo
                            ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet
                            est kasd kasd et erat magna eos
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded"
                                src="{{ asset('frontend/img/testimonial-2.jpg') }}"
                                style="width: 45px; height: 45px" />
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                        <i
                            class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>
                            Tempor stet labore dolor clita stet diam amet ipsum dolor duo
                            ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet
                            est kasd kasd et erat magna eos
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded"
                                src="{{ asset('frontend/img/testimonial-3.jpg') }}"
                                style="width: 45px; height: 45px" />
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                        <i
                            class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">
                                Subscribe Our
                                <span class="text-primary text-uppercase">Newsletter</span>
                            </h4>
                            <div class="position-relative mx-auto" style="max-width: 400px">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Enter your email" />
                                <button type="button"
                                    class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.html">
                                <h1 class="text-white text-uppercase mb-3">Icons Place</h1>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">
                            Contact
                        </h6>
                        <p class="mb-2">
                            <i class="fa fa-map-marker-alt me-3"></i>Rwanda-Kigali
                        </p>
                        <p class="mb-2">
                            <i class="fa fa-phone-alt me-3"></i>+250 788 598 533
                        </p>
                        <p class="mb-2">
                            <i class="fa fa-envelope me-3"></i>manirahoremy@gmail.com
                        </p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">
                                    Company
                                </h6>
                                <a class="btn btn-link" href="">About Us</a>
                                <a class="btn btn-link" href="">Contact Us</a>
                                <a class="btn btn-link" href="">Privacy Policy</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">
                                    Services
                                </h6>
                                <a class="btn btn-link" href="">Food & Restaurant</a>
                                <a class="btn btn-link" href="">Spa & Fitness</a>
                                <a class="btn btn-link" href="">Sports & Gaming</a>
                                <a class="btn btn-link" href="">Event & Party</a>
                                <a class="btn btn-link" href="">GYM & Yoga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; {{ date('Y') }} <a class="border-bottom" href="#">IconPlace</a>, All
                            Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed and Developed By
                            <a class="border-bottom" href="#">IPNET RWANDA LTD</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
