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

                <div class="booking p-5 rounded-4 futuristic-card shadow-lg">
                    <div class="row g-5 align-items-center">
                        <form>
                            <table class="table-classic align-middle text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Pekerjaan</th>
                                        <th>Telepon</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($datas as $index => $data)
                                    <tr>
                                        <td>{{$index +1}}</td>
                                        <td>{{$data -> no_ktp}}</td>
                                        <td>{{$data -> nama}}</td>
                                        <td>{{$data -> jenis_kelamin}}</td>
                                        <td>{{$data -> agama}}</td>
                                        <td>{{$data -> pekerjaan}}</td>
                                        <td>{{$data -> telp}}</td>
                                        <td>{{$data -> email}}</td>
                                        <td>
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ route('warga.edit', $data) }}"
                                                class="btn btn-sm btn-edit-futuristic">
                                                <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="{{ route('warga.destroy', $data->warga_id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Hapus data ini?')"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-delete-futuristic">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="10" class="text-muted py-4">
                                            <i class="fa fa-info-circle me-2"></i>Belum ada data booking.
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <style>
            /* --- Table Classic Style (Tanpa Border Tabel) --- */
            .table-classic {
                width: 100%;
                border-collapse: separate;
                border-spacing: 0 12px;
                color: #000923;
            }

            .table-classic thead tr th {
                background: #a3a467;
                color: #e5e5e5;
                font-weight: 600;
                letter-spacing: 0.5px;
                padding: 14px;
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 5px;
            }

            .table-classic tbody tr {
                background:#F5F5DC;
                transition: all 0.3s ease;
                border-radius: 12px;
            }

            .table-classic tbody tr:hover {
                background: rgba(255, 255, 255, 0.1);
                transform: scale(1.02);
            }

            .table-classic td {
                padding: 16px;
                vertical-align: middle;
                border: none;
                font-size: 0.95rem;
            }

            .table-classic .btn {
                border-radius: 10px;
                transition: all 0.3s ease;
            }

            .table-classic .btn-warning {
                background: #c8a63e;
                border: none;
                color: #fff;
            }

            .table-classic .btn-danger {
                background: #b63b3b;
                border: none;
            }

            .table-classic .btn-warning:hover {
                background: #e5c257;
                transform: translateY(-2px);
            }

            .table-classic .btn-danger:hover {
                background: #d14a4a;
                transform: translateY(-2px);
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
