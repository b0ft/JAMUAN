@extends('layouts.main')
@section('landing')
    <section class="services">
        @section('isian-tengah')
            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Our Services</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        </div>
                    </div>
                </div>
            </div>
        @endsection

        <!-- Service Start -->
        <div class="container-xxl py-5" style="margin-top: -3rem">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>
                    <h2 class="mt-2">Our Website</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-filter fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Adanya Pilihan Kategori</h5>
                            <p>Website kami menyediakan 2 kategori yang akan diperlukan oleh pelanggan dalam suatu rangkaian acara.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa-brands fa-themeco fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Tersedia Berbagai Tema</h5>
                            <p>Bingung dengan tema yang diinginkan? Gatau mau seperti apa? Tidak perlu khawatir kami menyediakan beberapa tema yang elegant untuk anda.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa-solid fa-circle-info fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Informasi Secara Komprehensif</h5>
                            <p>Menyediakan situs web yang berisi informasi lengkap mengenai acara yang diadakan.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-music fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Backsound Musik Dapat Ditemukan Secara Acak</h5>
                            <p>Backsound musik disediakan secara acak dan dipilih berdasarkan kategori tertentu, agar para tamu yang diundang tidak merasa jenuh.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5 my-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="mt-2">Our Website Interactions</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa-solid fa-envelope fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Amplop Rezeki</h5>
                            <p>Memberikan kemudahan bagi tamu yang ingin menyisihkan atau memberikan donasi secara digital.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa-solid fa-book fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Guess Book</h5>
                            <p>Memberikan kesempatan bagi tamu untuk meninggalkan pesan atau ucapan selamat kepada penyelenggara acara, serta memberikan kesempatan penyelenggara acara untuk melacak siapa yang mengunjungi atau mendapati undangan tersebut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
    </section>
@endsection