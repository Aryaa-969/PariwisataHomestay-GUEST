@extends('guest.layouts.guest.app')

@section('content')
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Data Warga</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Warga</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <a href="{{ route('warga.create') }}" class="btn btn-futuristic mb-4">
                <i class="fa fa-plus"></i> Tambah Warga
            </a>

            @include('guest.layouts.guest.alerts')

            <div class="row g-4 mt-2">
                @forelse($datas as $data)
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-profile-modern border-0 shadow-sm">

                            <!-- Header -->
                            <div class="card-header bg-primary text-white text-center py-2 rounded-top">
                                <h6 class="mb-0">Data Warga</h6>
                            </div>

                            <!-- Body -->
                            <div class="card-body text-center">

                                <div class="avatar-circle mb-3">
                                    <i class="fa fa-user fa-2x"></i>
                                </div>

                                <h5 class="card-title mb-1">{{ $data->nama }}</h5>
                                <p class="card-subtitle text-muted mb-3">{{ $data->no_ktp }}</p>

                                <div class="info-list text-start mb-3">
                                    <p><i class="fa fa-venus-mars me-2 text-warning"></i> {{ $data->jenis_kelamin }}</p>
                                    <p><i class="fa fa-praying-hands me-2 text-success"></i> {{ $data->agama }}</p>
                                    <p><i class="fa fa-briefcase me-2 text-secondary"></i> {{ $data->pekerjaan }}</p>
                                    <p><i class="fa fa-phone me-2 text-primary"></i> {{ $data->telp }}</p>
                                    <p><i class="fa fa-envelope me-2 text-danger"></i> {{ $data->email }}</p>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('warga.edit', $data) }}" class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>

                                    <form action="{{ route('warga.destroy', $data->warga_id) }}" method="POST"
                                        onsubmit="return confirm('Hapus data ini?')" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted py-4">
                        <i class="fa fa-info-circle me-2"></i> Belum ada data warga.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    </div>


    <style>
        /* --- Table Classic Style (Tanpa Border Tabel) --- */
        .card-profile-modern {
            border-radius: 15px;
            overflow: hidden;
            transition: 0.3s;
        }

        .card-profile-modern:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        }

        .avatar-circle {
            width: 70px;
            height: 70px;
            background-color: #e9ecef;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }

        .info-list p {
            margin-bottom: .45rem;
        }

        /* Classic shadowed container */
        .booking {
            background: #fff;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
        }
    </style>
@endsection
