@extends('layouts.template')
@section('content')
    @if ($errors->any())
        <div class=" alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid p-0">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-3"><strong>Dashboard</strong></h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Data Dashboard</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dashboard.update', $dashboard->id_dashboard) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control mb-3" id="nama" value="{{ $dashboard->nama }}"
                                        name="nama" placeholder="Harap diisi dengan Nama dengan benar" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control mb-3" id="alamat"
                                        value="{{ $dashboard->alamat }}" name="alamat"
                                        placeholder="Harap diisi dengan Alamat dengan benar" required>
                                </div>
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="file" class="form-control-file mb-3" id="logo" name="logo"
                                        value="{{ $dashboard->logo }}"><br>
                                    <div class="d-flex align-items-start mb-3">
                                        <img width="100px" height="100px" src="{{ url('' . $dashboard->logo) }}"
                                            alt=" {{ $dashboard->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea type="text" class="form-control mb-3" id="deskripsi" placeholder="Harap diisi dengan deskripsi dengan benar"
                                        name="deskripsi" required>{{ $dashboard->deskripsi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="whatsapp">Nomer Whatsapp</label>
                                    <input type="number" class="form-control mb-3" id="whatsapp" name="whatsapp"
                                        value="{{ $dashboard->whatsapp }}"
                                        placeholder="Harap di isi dengan nomer whatsapp dengan benar dan Harus di awali dengan Angka 62">
                                </div>
                                <div class="form-group">
                                    <label for="instagram">Link Instagram</label>
                                    <input type="text" class="form-control mb-3" id="instagram" name="instagram"
                                        value="{{ $dashboard->instagram }}"
                                        placeholder="Harap di isi link profile instagram dengan benar contoh : https://www.instagram.com/syair_devinci/">
                                </div>
                                <div class="form-group">
                                    <label for="twitter">Link Twitter</label>
                                    <input type="number" class="form-control mb-3" id="twitter" name="twitter"
                                        value="{{ $dashboard->twitter }}"
                                        placeholder="Harap di isi link profile twitter dengan benar contoh : https://twitter.com/SyairV">
                                </div>
                                <div class="form-group">
                                    <label for="facebook">Link Facebook</label>
                                    <input type="number" class="form-control mb-3" id="facebook" name="facebook"
                                        value="{{ $dashboard->facebook }}"
                                        placeholder="Harap di isi link profile facebook dengan benar contoh : https://www.facebook.com/Mitra-Jamur-Bondowoso-593256841159383">
                                </div>
                                <div class="form-group">
                                    <label for="youtube">Link Youtube</label>
                                    <input type="number" class="form-control mb-3" id="youtube" name="youtube"
                                        value="{{ $dashboard->youtube }}"
                                        placeholder="Harap di isi link profile youtube dengan benar contoh : https://www.youtube.com/channel/UCCLLUq6aN0wXKeabf9tRb5Q">
                                </div>
                                <div class="form-group">
                                    <label for="gmail">Alamat Gmail</label>
                                    <input type="number" class="form-control mb-3" id="gmail" name="gmail"
                                        value="{{ $dashboard->gmail }}"
                                        placeholder="Harap di isi link profile youtube dengan benar contoh : syairadirawan96@gmail.com">
                                </div>
                                <input type="submit" value="simpan" class="btn btn-primary"></td>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
