@extends('guest.layouts.guest.app')

@section('content')

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">My Booking</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">My Booking</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <a href="{{ route('booking.create') }}" class="btn btn-gradient mb-4">
                    <i class="fa fa-plus"></i> Tambah Booking
                </a>

                @include('guest.layouts.guest.alerts')

                @if($bookings->isEmpty())
                    <div class="text-center text-muted py-5">
                        <i class="fa fa-info-circle fa-2x mb-2"></i>
                        <p>Belum ada data booking.</p>
                    </div>
                @else
                    <div class="row g-4">
                        @foreach($bookings as $booking)
                            <div class="col-md-6 col-lg-4">
                                <div class="booking-card glass-card shadow-lg border-0 position-relative overflow-hidden">
                                    <div class="status-badge">
                                        @if($booking->status === 'pending')
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        @elseif($booking->status === 'confirmed')
                                            <span class="badge bg-success">Confirmed</span>
                                        @elseif($booking->status === 'cancelled')
                                            <span class="badge bg-danger">Cancelled</span>
                                        @else
                                            <span class="badge bg-secondary">Unknown</span>
                                        @endif
                                    </div>

                                    <div class="card-body text-dark">
                                        <div class="icon-header mb-3">
                                            <i class="fa fa-hotel icon-gradient"></i>
                                        </div>

                                        <h5 class="fw-bold mb-2 text-primary d-flex align-items-center gap-2">
                                            {{ is_array(json_decode($booking->kamar_id)) ? count(json_decode($booking->kamar_id)) : ($booking->kamar_id ?? 1) }} Kamar Dipesan
                                        </h5>
                                        <p class="small mb-1"><i class="fa fa-user me-2"></i><strong>Warga:</strong> {{ $booking->warga_id }}</p>
                                        <p class="small mb-1"><i class="fa fa-calendar-check me-2"></i><strong>Check-in:</strong> {{ \Carbon\Carbon::parse($booking->checkin)->format('d M Y') }}</p>
                                        <p class="small mb-1"><i class="fa fa-calendar-xmark me-2"></i><strong>Check-out:</strong> {{ \Carbon\Carbon::parse($booking->checkout)->format('d M Y') }}</p>
                                        <p class="small mb-1"><i class="fa fa-wallet me-2"></i><strong>Total:</strong> Rp {{ number_format($booking->total, 0, ',', '.') }}</p>
                                        <p class="small mb-3"><i class="fa fa-credit-card me-2"></i><strong>Metode:</strong> {{ ucfirst($booking->metode_bayar) }}</p>

                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            @if($booking->bukti_pembayaran)
                                                <a href="{{ asset('storage/'.$booking->bukti_pembayaran) }}" target="_blank"
                                                class="btn btn-sm btn-outline-dark px-3 rounded-pill">
                                                <i class="fa fa-eye me-1"></i> Bukti
                                                </a>
                                            @else
                                                <span class="text-light small opacity-75">Belum ada bukti</span>
                                            @endif

                                            <div class="d-flex gap-2">
                                                <a href="{{ route('booking.edit', $booking) }}" class="btn btn-sm btn-outline-warning rounded-pill">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <form action="{{ route('booking.destroy', $booking->booking_id) }}" method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus booking ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-outline-danger rounded-pill">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="glow-bg"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

@endsection
