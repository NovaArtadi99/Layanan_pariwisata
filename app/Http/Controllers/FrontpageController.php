<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function beranda(){
        $pageTitle = 'Sistem Layanan Pariwisata';

        return view('frontpage.page.beranda', [
            'pageTitle' => $pageTitle,
            'active' => 'beranda'
        ]);
    }

    public function tentang(){
        $pageTitle = 'Tentang - Layanan Pariwisata';

        return view('frontpage.page.tentang', [
            'pageTitle' => $pageTitle,
            'active' => 'tentang'
        ]);
    }

    public function pariwisata(){
        $pageTitle = 'Pariwisata - Layanan Pariwisata';

        return view('frontpage.pariwisata.pariwisata', [
            'pageTitle' => $pageTitle,
            'active' => 'pariwisata'
        ]);
    }

    public function pariwisatadetail(){
        $pageTitle = 'Detail Pariwisata - Layanan Pariwisata';

        return view('frontpage.pariwisata.pariwisata-detail', [
            'pageTitle' => $pageTitle,
            'active' => 'pariwisatadetail'
        ]);
    }

    public function kendaraan(){
        $pageTitle = 'Kendaraan - Layanan Pariwisata';

        return view('frontpage.kendaraan.kendaraan', [
            'pageTitle' => $pageTitle,
            'active' => 'kendaraan'
        ]);
    }

    public function kendaraandetail(){
        $pageTitle = 'Detail Kendaraan - Layanan Pariwisata';

        return view('frontpage.kendaraan.kendaraan-detail', [
            'pageTitle' => $pageTitle,
            'active' => 'kendaraandetail'
        ]);
    }

    public function penginapan(){
        $pageTitle = 'Penginapan - Layanan Pariwisata';

        return view('frontpage.penginapan.penginapan', [
            'pageTitle' => $pageTitle,
            'active' => 'penginapan'
        ]);
    }

    public function penginapandetail(){
        $pageTitle = 'Detail Penginapan - Layanan Pariwisata';

        return view('frontpage.penginapan.penginapan-detail', [
            'pageTitle' => $pageTitle,
            'active' => 'penginapan'
        ]);
    }

    public function pemandu(){
        $pageTitle = 'Pemandu - Layanan Pariwisata';

        return view('frontpage.pemandu.pemandu', [
            'pageTitle' => $pageTitle,
            'active' => 'pemandu'
        ]);
    }

    public function pemandudetail(){
        $pageTitle = 'Detail Pemandu - Layanan Pariwisata';

        return view('frontpage.pemandu.pemandu-detail', [
            'pageTitle' => $pageTitle,
            'active' => 'pemandudetail'
        ]);
    }

    public function paketlayanan(){
        $pageTitle = 'Paket Layanan - Layanan Pariwisata';

        return view('frontpage.paketlayanan.paketlayanan', [
            'pageTitle' => $pageTitle,
            'active' => 'paketlayanan'
        ]);
    }

    public function paketlayanandetail(){
        $pageTitle = 'Detail Paket Layanan - Layanan Pariwisata';

        return view('frontpage.paketlayanan.paketlayanan-detail', [
            'pageTitle' => $pageTitle,
            'active' => 'paketlayanandetail'
        ]);
    }

    public function blog(){
        $pageTitle = 'Blog - Layanan Pariwisata';

        return view('frontpage.blog.blog', [
            'pageTitle' => $pageTitle,
            'active' => 'blog'
        ]);
    }

    public function blogdetail(){
        $pageTitle = 'Blog Detail - Layanan Pariwisata';

        return view('frontpage.blog.blog-detail', [
            'pageTitle' => $pageTitle,
            'active' => 'blogdetail'
        ]);
    }

    public function berita(){
        $pageTitle = 'Berita - Layanan Pariwisata';

        return view('frontpage.berita.berita', [
            'pageTitle' => $pageTitle,
            'active' => 'berita'
        ]);
    }
    
    public function beritadetail(){
        $pageTitle = 'Detail Berita - Layanan Pariwisata';

        return view('frontpage.berita.berita-detail', [
            'pageTitle' => $pageTitle,
            'active' => 'beritadetail'
        ]);
    }

    public function kontak(){
        $pageTitle = 'Kontak - Layanan Pariwisata';

        return view('frontpage.page.kontak', [
            'pageTitle' => $pageTitle,
            'active' => 'kontak'
        ]);
    }

    public function kebijakan(){
        $pageTitle = 'Kebijakan Privasi - Layanan Pariwisata';

        return view('frontpage.page.kebijakan', [
            'pageTitle' => $pageTitle,
            'active' => 'kebijakan'
        ]);
    }

    public function ketentuan(){
        $pageTitle = 'Ketentuan Layanan - Layanan Pariwisata';

        return view('frontpage.page.ketentuan', [
            'pageTitle' => $pageTitle,
            'active' => 'ketentuan'
        ]);
    }

}

