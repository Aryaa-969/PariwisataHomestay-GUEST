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
                            <a href="{{ route('booking.create') }}" class="dropdown-item">Booking</a>
                            <a href="{{ route('booking.index') }}" class="dropdown-item">Your Booking</a>
                            <a href="{{ route('warga.index') }}" class="dropdown-item">Warga</a>
                            <a href="team.html" class="dropdown-item">Travel Guides</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="{{ route('404') }}" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
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

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5 futuristic-card shadow-lg rounded-4"
                        style="background: #FFF;
                        backdrop-filter: blur(10px);
                        border: 1px solid rgba(104, 104, 104, 0.08);
                        border-radius: 20px;">

                        <h2 class="fw-bold text-gradient mb-4">Tambah Warga</h2>
                        @include('guest.layouts.guest.alerts')

                        <form action="{{ route('warga.store') }}" method="POST" class="futuristic-form">
                            @csrf
                            <div class="row g-3">

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control input-glass" name="no_ktp" placeholder="NIK" value="{{ old('no_ktp') }}">
                                        <label>NIK</label>
                                        @error('no_ktp')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control input-glass" name="nama" placeholder="Nama" value="{{ old('nama') }}">
                                        <label>Nama</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select input-glass" name="jenis_kelamin">
                                            <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                            <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                        <label>Jenis Kelamin</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control input-glass" name="agama" placeholder="Agama" value="{{ old('agama') }}">
                                        <label>Agama</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control input-glass" name="pekerjaan" placeholder="Pekerjaan" value="{{ old('pekerjaan') }}">
                                        <label>Pekerjaan</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control input-glass" name="telp" placeholder="Telepon" value="{{ old('telp') }}">
                                        <label>Telepon</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control input-glass" name="email" placeholder="Email" value="{{ old('email') }}">
                                        <label>Email</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-gradient w-100 py-3 rounded-pill shadow-sm" type="submit">
                                        <i class="fa fa-paper-plane me-2"></i> Submit
                                    </button>
                                </div>

                            </div>
                        </form>
            </div>
        </div>
    </div>

@endsection
