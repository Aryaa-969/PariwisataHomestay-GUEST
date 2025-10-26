@extends('guest.layouts.guest.app')

@section('content')

    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h3 class="text-primary m-0">Pariwisata & Homestay</h3>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ route('service') }}" class="nav-item nav-link">Services</a>
                    <a href="{{ route('package') }}" class="nav-item nav-link">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="destination.html" class="dropdown-item">Destination</a>
                            <a href="{{ route('booking.create') }}" class="dropdown-item active">Booking</a>
                            <a href="{{ route('booking.index') }}" class="dropdown-item">My Booking</a>
                            <a href="{{ route('warga.index') }}" class="dropdown-item">Warga</a>
                            <a href="team.html" class="dropdown-item">Travel Guides</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="{{ route('404') }}" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                </div>
                {{-- Tombol kanan --}}
                @if (session('user'))
                    <div class="dropdown ms-3">
                        <a href="#" class="btn btn-outline-primary rounded-pill dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-user me-1"></i> {{ session('user')->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('booking.index') }}"><i class="fa fa-calendar-check me-2"></i> My Bookings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item text-danger"><i class="fa fa-sign-out-alt me-2"></i> Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('users.create') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-3">Register</a>
                @endif
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

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5 rounded-4 shadow-lg"
                style="background: #FFF;
                        backdrop-filter: blur(10px);
                        border: 1px solid rgba(104, 104, 104, 0.08);
                        border-radius: 20px;">

                <div class="text-center mb-4">
                    <h2 class="fw-bold text-gradient mb-3">Booking Homestay</h2>
                    <p class="text-light-50 mb-0">Isi data dengan benar untuk melakukan pemesanan</p>
                </div>

                @include('guest.layouts.guest.alerts')

                <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input
                                    type="text"
                                    class="form-control input-glass @error('kamar_id') is-invalid @enderror"
                                    id="name"
                                    name="kamar_id"
                                    value="{{ old('kamar_id') }}"
                                    required>
                                <label for="name">Kamar</label>
                                @error('kamar_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input
                                    type="text"
                                    class="form-control input-glass @error('warga_id') is-invalid @enderror"
                                    id="name"
                                    name="warga_id"
                                    value="{{ old('warga_id') }}"
                                    required>
                                <label for="name">Warga</label>
                                @error('warga_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input
                                    type="date"
                                    class="form-control input-glass @error('checkin') is-invalid @enderror"
                                    name="checkin"
                                    value="{{ old('checkin') }}"
                                    required/>
                                <label>Check In</label>
                                @error('checkin')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input
                                    type="date"
                                    class="form-control input-glass @error('checkout') is-invalid @enderror"
                                    name="checkout"
                                    value="{{ old('checkout') }}"
                                    required/>
                                <label>Check Out</label>
                                @error('checkout')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input
                                    type="number"
                                    class="form-control input-glass @error('total') is-invalid @enderror"
                                    step="0.01"
                                    name="total"
                                    value="{{ old('total') }}"
                                    required>
                                <label>Total</label>
                                @error('total')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input
                                    type="text"
                                    class="form-control input-glass @error('status') is-invalid @enderror"
                                    name="status"
                                    value="{{ old('status', 'pending') }}"
                                    required>
                                <label>Status</label>
                                @error('status')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input
                                    type="text"
                                    class="form-control input-glass @error('metode_bayar') is-invalid @enderror"
                                    name="metode_bayar"
                                    value="{{ old('metode_bayar') }}"
                                    required>
                                <label>Metode Bayar</label>
                                @error('metode_bayar')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input
                                    type="file"
                                    class="form-control input-glass @error('bukti_pembayaran') is-invalid @enderror"
                                    name="bukti_pembayaran"
                                    required>
                                <label>Bukti Pembayaran</label>
                                @error('bukti_pembayaran')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-center mt-4">
                            <button class="btn btn-gradient px-5 py-3 rounded-pill shadow-sm" type="submit">
                                <i class="fa fa-paper-plane me-2"></i> Book Now
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
