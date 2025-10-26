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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="destination.html" class="dropdown-item">Destination</a>
                            <a href="{{ route('booking.create') }}" class="dropdown-item">Booking</a>
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
                        <h1 class="display-3 text-white animated slideInDown">User</h1>
                        <nav aria-label="breadcrumb">
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .user-section {
            animation: fadeIn 0.8s ease-in-out;
        }

        h2 {
            font-weight: 700;
            color: #2b2b2b;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary {
            background: #a3a467;
            border: none;
            box-shadow: 0 3px 10px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(90deg, #a4a568ff, #feffdaff);
            transform: translateY(-2px);
        }

        .user-card {
            background: #F5F5DC;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            padding: 1.5rem;
            transition: all 0.3s ease-in-out;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .user-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        @keyframes gradientMove {
            0% { left: -50%; }
            100% { left: 100%; }
        }

        .user-name {
            font-weight: 600;
            font-size: 1.1rem;
            color: #333;
            margin-top: 1rem;
        }

        .user-email {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .action-btns {
            margin-top: 1rem;
            display: flex;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-sm {
            border-radius: 10px;
            font-weight: 500;
            padding: 6px 12px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.15);
            transition: all 0.3s;
        }

        .btn-info { background: #0dcaf0; border: none; color: #fff; }
        .btn-warning { background: #ffc107; border: none; color: #212529; }
        .btn-danger { background: #dc3545; border: none; color: #fff; }

        .btn-sm:hover {
            transform: translateY(-2px);
            opacity: 0.9;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    <div class="container py-5 user-section">

         @include('guest.layouts.guest.alerts')
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('users.create') }}" class="btn btn-primary">+ Tambah User</a>
        </div>

        <div class="row g-4">
            @forelse($users as $user)
                <div class="col-md-4 col-sm-6">
                    <div class="user-card">
                        <div class="avatar mb-3">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=random&size=100"
                                alt="Avatar {{ $user->name }}" class="rounded-circle shadow-sm">
                        </div>
                        <div class="user-name">{{ $user->name }}</div>
                        <div class="user-email">{{ $user->email }}</div>

                        <div class="action-btns">
                            <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline-block">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus user ini?')">
                                    <i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted py-4">
                    <i class="bi bi-person-x fs-3"></i><br>
                    Belum ada user
                </div>
            @endforelse
        </div>
    </div>
@endsection
