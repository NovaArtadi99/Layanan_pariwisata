<nav id="navbar" class="navbar">
    <ul>
        <li><a href="{{ route('frontpage.beranda') }}" class="{{ Request::is('/') ? 'active' : '' }}">Beranda</a></li>
        <li><a href="{{ route('frontpage.tentang') }}" class="{{ Request::is('tentang') ? 'active' : '' }}">Tentang</a></li>
        <li class="dropdown">
            <a href="#" class="{{ Request::is('pariwisata') || Request::is('kendaraan') || Request::is('penginapan') || Request::is('pemandu') || Request::is('paketlayanan') ? 'active' : '' }}">
                <span>Layanan</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
            </a>
            <ul>
                <li><a href="{{ route('frontpage.pariwisata') }}" class="{{ Request::is('pariwisata') ? 'active' : '' }}">Pariwisata</a></li>
                <li><a href="{{ route('frontpage.kendaraan') }}" class="{{ Request::is('kendaraan') ? 'active' : '' }}">Kendaraan</a></li>
                <li><a href="{{ route('frontpage.penginapan') }}" class="{{ Request::is('penginapan') ? 'active' : '' }}">Penginapan</a></li>
                <li><a href="{{ route('frontpage.pemandu') }}" class="{{ Request::is('pemandu') ? 'active' : '' }}">Pemandu</a></li>
                <li><a href="{{ route('frontpage.paketlayanan') }}" class="{{ Request::is('paketlayanan') ? 'active' : '' }}">Paket Layanan</a></li>
            </ul>
        </li>
        <li><a href="{{ route('frontpage.blog') }}" class="{{ Request::is('blog') ? 'active' : '' }}">Blog</a></li>
        <li><a href="{{ route('frontpage.berita') }}" class="{{ Request::is('berita') ? 'active' : '' }}">Berita</a></li>
        <li style="margin-right: 20px;"><a href="{{ route('frontpage.kontak') }}" class="{{ Request::is('kontak') ? 'active' : '' }}">Kontak</a></li>
    </ul>
    <div class="nav-right">
        <a href="#" class="nav-btn btn">Masuk</a>
    </div>
    <div class="dropdown">
        <button class="nav-btn btn btn-transparent dropdown-toggle" type="button" id="languageDropdown"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="/assets/template_user/assets/img/indonesia.svg" alt="">
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
            <a class="dropdown-item d-flex align-items-center" href="#">
                <span class="d-flex justify-content-center align-items-center">
                    <img src="/assets/template_user/assets/img/indonesia.svg" alt=""
                        style="width: 30px; height: 30px;" class="me-2"> Indonesia
                </span>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <span class="d-flex justify-content-center align-items-center">
                    <img src="/assets/template_user/assets/img/england.svg" alt=""
                        style="width: 30px; height: 30px;" class="me-2"> English
                </span>
            </a>
        </div>
    </div>
</nav>
