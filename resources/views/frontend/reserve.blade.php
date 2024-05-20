<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Reservation - Icon Place</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/favicon.ico') }}" rel="icon" />

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
        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="{{ url('/') }}"
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
                        <a href="{{ url('/') }}" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Icon Place</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                                <a href="{{ url('/about') }}" class="nav-item nav-link">About Us</a>
                                <a href="{{ url('/services') }}" class="nav-item nav-link">Services</a>
                                <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="ms-auto">
                                <a href="{{ url('/login') }}" class="btn btn-primary">Login</a>
                                <a href="{{ url('/register') }}" class="btn btn-outline-light ms-2">Register</a>
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
                        Reservation
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Rooms</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">
                                Reservation
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <div class="container-xxl py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Room details content -->
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Reserve</h5>
                                @auth
                                    <form action="{{ route('reserve.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="room_id" value="{{ $room->id }}">

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="username" name="username"
                                                value="{{ Auth::user()->username }} {{ Auth::user()->lastname }}"
                                                readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="room_name" class="form-label">Room Name</label>
                                            <input type="text" class="form-control" id="room_name" name="room_name"
                                                value="{{ $room->type }}" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="location" class="form-label">Location</label>
                                            <input type="text" class="form-control" id="location" name="location"
                                                value="{{ $room->location }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="checkin" class="form-label">Check-in</label>
                                            <input type="date" class="form-control" id="checkin" name="checkin"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="checkout" class="form-label">Check-out</label>
                                            <input type="date" class="form-control" id="checkout" name="checkout"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="guests" class="form-label">Guests</label>
                                            <select class="form-select" id="guests" name="guests" required>
                                                <option value="1">1 guest</option>
                                                <option value="2">2 guests</option>
                                                <option value="3">3 guests</option>
                                                <option value="4">4 guests</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100">Reserve</button>
                                    </form>
                                @else
                                    <p class="text-danger">You must be logged in to make a reservation.</p>
                                    <a href="{{ route('login') }}" class="btn btn-primary w-100">Login</a>
                                    <a href="{{ route('register') }}"
                                        class="btn btn-outline-secondary w-100 mt-2">Register</a>
                                @endauth
                                <hr>
                                <div>
                                    <h6>Price Calculation</h6>
                                    <p id="price-calculation">
                                        {{ number_format($room->price) }} Rwf /Night x <span id="nights">0</span>
                                        nights
                                    </p>
                                    <p>Total: <span id="total-price">0</span> Rwf</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br>
        <br>
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
                                <a href="">FAQs</a>
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

    <!-- Custom Script for Price Calculation -->
    <script>
        document.getElementById('checkout').addEventListener('change', function() {
            var checkin = new Date(document.getElementById('checkin').value);
            var checkout = new Date(document.getElementById('checkout').value);
            var diffTime = Math.abs(checkout - checkin);
            var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            document.getElementById('nights').textContent = diffDays;
            document.getElementById('total-price').textContent = new Intl.NumberFormat().format(diffDays *
                {{ $room->price }});
        });
    </script>
</body>

</html>
