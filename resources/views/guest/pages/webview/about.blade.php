@extends('guest.layouts.guest.app')

@section('content')

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="Assets/img/about.jpg" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                        <h1 class="mb-4">Welcome to <span class="text-primary">My Project</span></h1>
                        <p class="mb-4">Project ini dibuat utuk mengembangkan potensi wisata desa agar lebih terstruktur dan menarik, Menghadirkan sistem informasi untuk memudahkan promosi digital, dan Membantu desa memiliki branding pariwisata yang modern dan profesional</p>
                        <p class="mb-4">Alurnya : </p>

                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Observasi & Pengumpulan Data Desa</p>
                                <p class="mb-4">mendata lokasi wisata, budaya, event desa, dan rumah yang menjadi homestay</p>

                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Perancangan Sistem Informasi seperti Website</p>
                                 <p class="mb-4">membuat tampilan & fitur Pariwisata + Homestay</p>

                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Implementasi & Pelatihan Warga</p>
                                 <p class="mb-4">warga diajari mengelola daftar wisata, event, dan homestay</p>

                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Launching & Promosi Digital</p>
                                 <p class="mb-4">website dijadikan sarana promosi untuk menarik wisatawan</p>


                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Monitoring & Evaluasi Berkala</p>
                                 <p class="mb-4">mengecek perkembangan ekonomi & kunjungan</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Travel Guide</h6>
                    <h1 class="mb-5">Meet Our Guide</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="Assets/img/team-1.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="Assets/img/team-2.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="Assets/img/team-3.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="Assets/img/team-4.jpg" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
