@extends('frontend.layouts.template')
@section('frontend.content')
    <!-- produk -->
    <div class="section-produk my-6">
        <div class="breadcrumb-produk text-center">
            <h5 class="">Produk Kami</h5>
        </div>
        <div class="container my-4">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="produk-heading-dua text-center">
                        <h6>Kami besar dengan kepercayaan pelanggan dan Kami <br> Tumbuh untuk Kepuasan Pelanggan</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <img src="{{ url('' . $produk->gambar) }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-body shadow-sm p-3 mb-5 bg-body rounded">
                            <h5>{{ $produk->nama }}</h4>
                                <p>{{ $produk->deskripsi }}</p>
                                <div class="d-flex">
                                    <p class="px-2">Rp </p>
                                    <h4> {{ $produk->harga }}/Log</h4>

                                </div>
                                <a href="" class="btn btn-success w-100 my-5">Pesan sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="text-center mb-4">
                <h5>Lihat Produk Lainnya</h5>
            </div>

            <div class="row">
                @foreach ($oproduk as $item)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card shadow p-3 mb-5 bg-body rounded">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $item->nama }}</h5>
                                            <img class=" img-fluid" src="{{ url('' . $item->gambar) }}"
                                                alt="card image">
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <div class="bg-light p-2 mb-3">
                                                <h5 class="card-title">{{ $item->nama }}</h5>
                                            </div>
                                            <img class=" img-fluid" src="{{ url('' . $item->gambar) }}"
                                                alt="card image">
                                            <!-- <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p> -->
                                            <a href="{{ url('produk/detail-produk/' . $item->slug) }}"
                                                class="btn btn-primary mt-4 text-white">Lihat
                                                produk</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- end produk -->

    <div class="container-fluid d-flex justify-content-end fixed-bottom p-4 whatsapp">
        <a href="https://api.whatsapp.com/send?phone=" class="btn btn-success"><i class="fab fa-whatsapp"></i></a>
    </div>
@endsection
