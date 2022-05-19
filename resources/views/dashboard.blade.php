@extends('frontend.layouts.template')
@section('frontend.content')
    <!-- slider -->
    <section class="home-slider my-5">
        <div class="container-fluid">
            <!-- Slider main container -->
            <div class="swiper swiperBanner">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/img/sliders/slider-01.jpg') }}" class="" alt=""
                            srcset="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/img/sliders/slider-02.jpg') }}" class="" alt=""
                            srcset="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/img/sliders/slider-02.jpg') }}" class="" alt=""
                            srcset="">
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
            <!-- end slider main container -->
        </div>
    </section>
    <!-- end slider -->

    <!-- featured -->
    <section class="section-features my-6">
        <div class="container">
            <div class="text-center">
                <h4>Mengapa Memilih Kami</h4>
                <p>Pilihan yang tepat dan harga yang bersahabat</p>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="d-flex">
                        <img src="{{ asset('frontend/img/icon/icon-time.svg') }}" class="img-fluid w-25" alt="">
                        <div class="align-self-center">
                            <h5>Kapan Saja</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex">
                        <img src="{{ asset('frontend/img/icon/icon-location.svg') }}" class="img-fluid w-25" alt="">
                        <div class="align-self-center">
                            <h5>Dimana Saja</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex">
                        <img src="{{ asset('frontend/img/icon/icon-dolar.svg') }}" class="img-fluid w-25" alt="">
                        <div class="align-self-center">
                            <h5>Harga Terjangkau</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="d-flex">
                        <img src="{{ asset('frontend/img/icon/icon-hd.svg') }}" class="img-fluid w-25" alt="">
                        <div class="align-self-center">
                            <h5>Kualitas Terbaik</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end featured -->

    <!-- services -->
    <section class="section-services my-6">
        <div class="container">
            <div class="text-center">
                <h4>Jasa yang kami tawarkan </h4>
                <p>Semua ada disini</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5 bg-body rounded" style="border: none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('frontend/img/icon/icon-food.svg') }}" class="img-fluid w-25 w-25"
                                    alt="">
                            </div>
                            <div class="text-center my-4">
                                <h5>Jamur Hias</h5>
                                <p>Menyediakan Jasa Pembuatan Aplikasi Android agar bisnis anda lebih Efisien</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5 bg-body rounded" style="border: none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('frontend/img/icon/icon-food.svg') }}" class="img-fluid w-25" alt="">
                            </div>
                            <div class="text-center my-4">
                                <h5>Jamur Konsumsi</h5>
                                <p>Menyediakan Jasa
                                    Pembuatan Website agar
                                    bisnis anda lebih Profesional</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5 bg-body rounded" style="border: none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('frontend/img/icon/icon-mitra.svg') }}" class="img-fluid w-25" alt="">
                            </div>
                            <div class="text-center my-4">
                                <h5>Mitra Jamur</h5>
                                <p>Menyediakan Jasa Desain UI/UX Agar Aplikasi Bisnis Kalian Semakin Menarik</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5 bg-body rounded" style="border: none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('frontend/img/icon/icon-free.svg') }}" class="img-fluid w-25" alt="">
                            </div>
                            <div class="text-center my-4">
                                <h5>Free Ongkir</h5>
                                <p>Menyediakan Jasa Pembuatan Logo dan 3D Model yang menarik Mata</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5 bg-body rounded" style="border: none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('frontend/img/icon/icon-browser.svg') }}" class="img-fluid w-25"
                                    alt="">
                            </div>
                            <div class="text-center my-4">
                                <h5>Log Jamur</h5>
                                <p>Menyediakan Jasa Pembuatan Video atau Edit Sesuai Keinginan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow p-3 mb-5 bg-body rounded" style="border: none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('frontend/img/icon/icon-produksi.svg') }}" class="img-fluid w-25"
                                    alt="">
                            </div>
                            <div class="text-center my-4">
                                <h5>Alat Produksi</h5>
                                <p>MMenerima Jasa Konsultasi Di Bidang Teknologi Dari Software Maupun Hardware</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end services -->

    <!-- produk -->
    <div class="section-produk my-6 position-relative" style="background-image: url('{{ asset('frontend/img/galeri/back-jamur.png') }}');
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    background-position: center;
                                    backdrop-filter: blur(5px);">
        <div class="container">
            <div class="text-center pt-5">
                <h4 style="font-size: 28px;">Coba Produk Unggulan Kami</h4>
                <p>Sekarang Anda akan mendapatkan sensasi dengan Cita Rasa SPESIAL dari Produk Jamur <br> Unggulan Kami</p>
            </div>
            <div class="d-flex justify-content-center produk-button">
                <a href="" class="btn btn-light">Lihat Produk Kami</a>
            </div>
        </div>
    </div>
    <!-- end produk -->
    <!-- Galeri -->
    <section class="section-galery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <h4>Galeri</h4>
                                <p>Aktif, Kreatif, dan Variatif</p>
                            </div>
                            <div class="swiper swiperGaleri">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide"><img
                                            src="{{ asset('frontend/img/galeri/galeri-1.jpg') }}" class="img-fluid"
                                            alt=""></div>
                                    <div class="swiper-slide"><img
                                            src="{{ asset('frontend/img/galeri/galeri-2.jpg') }}" class="img-fluid"
                                            alt=""></div>
                                    <div class="swiper-slide"><img
                                            src="{{ asset('frontend/img/galeri/galeri-3.jpg') }}" class="img-fluid"
                                            alt=""></div>
                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end galeri -->

    <!-- contact -->
    <section class="section-contact my-6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body p-6">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="heading-title">Pesan Jamur Di Kami,<br>
                                        <span class="heading-span">MURAH</span> gaes!!
                                    </h4>
                                    <p>Anda bisa membeli jamur jenis konsumsi, hias, <br>
                                        bahkan menjadi mitra kami</p>
                                </div>
                                <div class="col-md-4 d-flex align-items-center">
                                    <a href="" class="btn btn-primary"> Hubungi Kami </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact  -->

    <!-- saran -->
    <section class="section-saran my-6">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto card">
                    <div class="card-body p-4">
                        <div class="row py-4">
                            <div class="col-md-6 back-contact">
                                <div class="section-saran-title p-4">
                                    <h4>Kritik <br> dan Saran</h4>
                                    <p>Kritikmu adalah hadiah untukku dan Saranmu adalah masa depanku</p>
                                </div>
                            </div>
                            <div class="col-md-6 align-self-center">
                                <form action="">

                                    <div class="form-group row">
                                        <div class="col-md-6 mb-4">
                                            <input type="text" placeholder="Nama Depan" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <input type="text" placeholder="Nama Belakang" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="text" placeholder="Email anda" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="" class="form-control" placeholder="Saran" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="submit" class="btn btn-primary"> Kirim </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end saran -->
    <div class="container-fluid d-flex justify-content-end fixed-bottom p-4 whatsapp">
        <a href="https://api.whatsapp.com/send?phone=" class="btn btn-success"><i class="fab fa-whatsapp"></i></a>
    </div>
@endsection
