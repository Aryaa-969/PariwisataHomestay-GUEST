<div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a class="nav-item {{ request()->routeIs('index.*') ? 'active' : '' }}">Home</a>
                    <a class="nav-item {{ request()->routeIs('about.*') ? 'active' : '' }}">About</a>
                    <a class="nav-item {{ request()->routeIs('service.*') ? 'active' : '' }}">Services</a>
                    <a class="nav-item {{ request()->routeIs('package.*') ? 'active' : '' }}">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="destination.html" class="dropdown-item">Destination</a>
                            <a class="dropdown-item {{ request()->routeIs('booking.create.*') ? 'active' : '' }}">Booking</a>
                            <a class="dropdown-item {{ request()->routeIs('booking.index.*') ? 'active' : '' }}">Your Booking</a>
                            <a class="dropdown-item {{ request()->routeIs('warga.index.*') ? 'active' : '' }}">Warga</a>
                            <a href="team.html" class="dropdown-item">Travel Guides</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a class="dropdown-item {{ request()->routeIs('404.*') ? 'active' : '' }}">404 Page</a>
                        </div>
                    </div>
                    <a class="nav-item {{ request()->routeIs('contact.*') ? 'active' : '' }}">Contact</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Booking</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
