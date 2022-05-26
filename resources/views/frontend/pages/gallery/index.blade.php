@extends('frontend.layouts.template')
@section('frontend.content')
    <!-- galeri -->
    <div class="section-produk ">
        <div class="breadcrumb-produk text-center">
            <h5 class="">Galeri</h5>
        </div>
        <div class="container my-4">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="produk-heading-dua text-center">
                        <h6>Dokumentasi Kegiatan Mitra Jamur Bondowoso</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section-galeri pb-5">
                <div class="row">
                    @foreach ($gallery as $item)
                        <div class="col-sm-12 col-md-4">
                            <a class="lightbox" href="{{ $item->gambar }}">
                                <img src="{{ $item->gambar }}" alt="Bridge">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- end galeri -->

    <div class="container-fluid d-flex justify-content-end fixed-bottom p-4 whatsapp">
        <a href="https://api.whatsapp.com/send?phone={{ $dashboard->whatsapp }}" class="btn btn-success"><i
                class="fab fa-whatsapp"></i></a>
    </div>
@endsection
