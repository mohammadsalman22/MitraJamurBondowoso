<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand d-flex mx-5" href="{{ route('dashboard') }}">
            <img src="{{ asset('frontend/img/logo.png') }}" class="img-fluid d-inline-block align-self-center" alt=""
                width="150" height="150">
            <strong>Jamur <br> Tiram <br> Putih</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(2) == '' ? 'active' : '' }}" aria-current="page"
                        href="{{ route('dashboard') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(2) == 'produk' ? 'active' : '' }}" aria-current="page"
                        href="#">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(2) == 'gallery' ? 'active' : '' }}" aria-current="page"
                        href="{{ route('gallery') }}">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(2) == 'tentang' ? 'active' : '' }}" aria-current="page"
                        href="{{ route('tentang') }}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->segment(2) == 'kontak' ? 'active' : '' }}" aria-current="page"
                        href="{{ route('kontak') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>