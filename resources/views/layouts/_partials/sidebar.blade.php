<div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="{{ route('dashboard') }}">
        <span class="align-middle">AdminKit</span>
    </a>

    <ul class="sidebar-nav">
        <li class="sidebar-header">
            Pages
        </li>

        <li class="sidebar-item {{ request()->segment(2) == 'dashboard' ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('dashboard') }}">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item {{ request()->segment(2) == 'produk' ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('produk.index') }}">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Produk</span>
            </a>
        </li>

        <li class="sidebar-item {{ request()->segment(2) == 'gallery' ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('gallery.index') }}">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Gallery</span>
            </a>
        </li>

    </ul>
</div>
