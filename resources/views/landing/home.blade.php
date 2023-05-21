@extends('layouts.main')
@section('landing')
    <section class="home">
        @section('isian-tengah')
        <div class="container-xxl py-5 bg-primary hero-header mb-5">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="text-white mb-4 animated zoomIn">
                            GET YOUR DREAM TO ACHIEVE A BRILLIANT TIME WITH US!!!
                    </h1>
                        <p class="text-white pb-3 animated zoomIn">
                            Time is fast for those who are happy? Feels slow for those who are tormented? Feels tight for those who are lazy? So take your precious time with us...
                        </p>
                        <a href="{{ route('error') }}" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">
                            Free Template
                        </a>
                        <a href="{{ route('error') }}" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">
                            Our Product
                        </a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-start">
                        <img class="img-fluid" src="/assets/img/hero-jamuan.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        @endsection

        <!-- About Start -->
        <div class="container-xxl">
            <div class="container px-lg-5 mb-5">
                <div class="row g-5 justify-content-between" style="padding-top: 4rem">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">
                                About Us
                            </h6>
                            <h2 class="mt-2 text-justify">
                                The best INVITATION solution, effective and efficient, especially in the use of time
                            </h2>
                        </div>
                        <p class="mb-4">
                            SELAMAT DATANG DI WEBSITE JAMUAN... WEBSITE JAMUAN MERUPAKAN PRODUK DENGAN JASA PEMBUATAN UNDANGAN SECARA DIGITAL YANG DI SUPPORT OLEH PROGRAMMER MUDA BANGSA YANG HEBAT DI BIDANGNYA. SO TUNGGU APALAGI "TAKE YOUR PRECIOUS TIME WITH US".
                        </p>
                        <div class="d-flex align-items-center mt-4">
                            {{-- <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a> --}}
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-whatsapp"></i></a>
                            {{-- <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="/assets/img/about-logo-jamuan.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
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

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Team</h6>
                    <h2 class="mt-2">Temui Kami</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://www.facebook.com/muhammad.alvin.5055?mibextid=ZbWKwL" target="_blank2">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://twitter.com/alfin7710?t=QVWkpD1IrvaOmEUEjpeWDg&s=09" target="_blank2">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://instagram.com/alvin7710?igshid=MzNlNGNkZWQ4Mg==" target="_blank2">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://www.linkedin.com/in/muhammad-alfin-khaerudin-286a5b231" target="_blank2">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                                <img class="img-fluid rounded w-100" src="/assets/img-profile/alfin.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Muhammad Alfin Khaerudin</h5>
                                <small>CEO & PROGRAMMER</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-around">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://www.facebook.com/aldysych/" target="_blank2">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://www.instagram.com/aldysych/" target="_blank2">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://www.linkedin.com/in/aldysyachranie/" target="_blank2">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                                <img class="img-fluid rounded w-100" src="/assets/img-profile/aldy.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Aldy Syachranie</h5>
                                <small>PROGRAMMER</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://www.instagram.com/delvino_ardy/" target="_blank2">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://www.instagram.com/delvino_ardy/" target="_blank2">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                                <img class="img-fluid rounded w-100" src="/assets/img-profile/delvino.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Delvino Ardi</h5>
                                <small>UI/UX</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-around">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://www.instagram.com/syazelaporogrants/" target="_blank2">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="btn btn-square text-primary bg-white my-1" href="https://www.linkedin.com/in/farhan-maulana-undefined-957718248/" target="_blank2">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                                <img class="img-fluid rounded w-100" src="/assets/img-profile/farhan.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Farhan Maulana Aziz</h5>
                                <small>UI/UX</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href="" target="_blank2">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-square text-primary bg-white my-1" href="" target="_blank2">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-square text-primary bg-white my-1" href="" target="_blank2">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="btn btn-square text-primary bg-white my-1" href="" target="_blank2">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                                <img class="img-fluid rounded w-100" src="/assets/img-profile/kenya.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Kenya Bhanuwati</h5>
                                <small>UI/UX</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

    </section>
@endsection
