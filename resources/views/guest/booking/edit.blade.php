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
                                <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="booking p-5 rounded-4 shadow-lg"
                        style="background: #FFF;
                                backdrop-filter: blur(10px);
                                border: 1px solid rgba(104, 104, 104, 0.08);">

                        <div class="text-center mb-4">
                            <h2 class="fw-bold text-gradient mb-3">Edit</h2>
                            <p class="text-light-50 mb-0">Isi data dengan benar untuk melakukan pemesanan</p>
                        </div>

                        @include('guest.layouts.guest.alerts')

                        <form action="{{ route('booking.update', $booking) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row g-3">

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control input-glass" id="name" name="kamar_id"
                                            value="{{ old('kamar_id', $booking->kamar_id) }}" required>
                                        <label for="name">Kamar</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control input-glass" id="name" name="warga_id"
                                            value="{{ old('warga_id', $booking->warga_id) }}" required>
                                        <label for="name">Warga</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control input-glass" name="checkin"
                                            value="{{ old('checkin', $booking->checkin) }}" required/>
                                        <label>Check In</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control input-glass" name="checkout"
                                            value="{{ old('checkout', $booking->checkout) }}" required/>
                                        <label>Check Out</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control input-glass" step="0.01" name="total"
                                            value="{{ old('total', $booking->total) }}" required>
                                        <label>Total</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control input-glass" name="status"
                                            value="{{ old('status', $booking->status ?? 'pending') }}" required>
                                        <label>Status</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control input-glass" name="metode_bayar"
                                            value="{{ old('metode_bayar', $booking->metode_bayar) }}" required>
                                        <label>Metode Bayar</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="file" class="form-control input-glass" name="bukti_pembayaran">
                                        <label>Bukti Pembayaran</label>
                                        @if($booking->bukti_pembayaran)
                                            <small class="text-muted mt-1 d-block">
                                                File saat ini:
                                                <a href="{{ asset('storage/'.$booking->bukti_pembayaran) }}" target="_blank">
                                                    Lihat Bukti
                                                </a>
                                            </small>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-center mt-4">
                                    <button class="btn btn-gradient px-5 py-3 rounded-pill shadow-sm" type="submit">
                                        <i class="fa fa-paper-plane me-2"></i> Simpan Perubahan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
@endsection
