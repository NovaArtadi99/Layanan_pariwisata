@extends('frontpage.general.layout')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('/assets/template_user/assets/img/beranda/pariwisatapage.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Pariwisata</h2>
            <ol>
                <li><a href="{{ route('frontpage.beranda') }}">Beranda</a></li>
                <li>Pariwisata</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- Pariwisata -->
    <div class="container-xxl py-5">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Jelajahi Wisata Kami</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="/assets/template_user/assets/img/beranda/ubud.jpeg" alt="">
                            <small
                                class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rp10.000</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Pasar Ubud</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                            <p class="text-body mb-3">Pasar Seni Ubud, ada banyak barang-barang yang kita bisa beli terutama
                                souvernir, pakaian, dan kesenian-kesenian lain khas Bali.</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('frontpage.pariwisatadetail') }}">Lihat Detail</a>
                                <a class="btn btn-sm btn-success rounded py-2 px-4" href="">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="/assets/template_user/assets/img/beranda/tanah lot.jpeg" alt="">
                            <small
                                class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rp20.000</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Tanah Lot</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                            <p class="text-body mb-3">Tanah lot adalah objek wisata Bali yang terdapat pura di atas tebing batu
                                karang berwarna hitam.</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('frontpage.pariwisatadetail') }}">Lihat Detail</a>
                                <a class="btn btn-sm btn-success rounded py-2 px-4" href="">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="/assets/template_user/assets/img/beranda/kelingking beach.jpeg" alt="">
                            <small
                                class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rp5.000</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Pantai Kelingking</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                            <p class="text-body mb-3">Kelingking Beach dijuluki sebagai salah satu pantai paling instagramable di
                                dunia.</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('frontpage.pariwisatadetail') }}">Lihat Detail</a>
                                <a class="btn btn-sm btn-success rounded py-2 px-4" href="">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="/assets/template_user/assets/img/beranda/danau-tamblingan.jpeg" alt="">
                            <small
                                class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rp15.000</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Danau Tamblingan</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                            <p class="text-body mb-3">Danau Tamblingan dapat menjadi salah satu referensi terbaik apabila Anda
                                ingin menikmati keindahan alam dari pulau Dewata Bali.</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('frontpage.pariwisatadetail') }}">Lihat Detail</a>
                                <a class="btn btn-sm btn-success rounded py-2 px-4" href="">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="/assets/template_user/assets/img/beranda/bali handara golf.jpeg" alt="">
                            <small
                                class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rp10.000</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Bali Handara Golf</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                            <p class="text-body mb-3">Bali Handara Iconic Gate menyajikan keindahan gapura atau gerbang masuk
                                dengan ornamen dan ukiran tradisional khas Bali, yang tampil ikonik serta eksotis.</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('frontpage.pariwisatadetail') }}">Lihat Detail</a>
                                <a class="btn btn-sm btn-success rounded py-2 px-4" href="">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="/assets/template_user/assets/img/beranda/lempuyang.jpeg" alt="">
                            <small
                                class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rp10.000</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Pura Lempuyang</h5>
                                <div class="ps-2">
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                            <p class="text-body mb-3">Pura Lempuyang, juga dikenal sebagai “Gerbang Surga Bali,” adalah kompleks
                                pura Hindu yang terletak di lereng Gunung Lempuyang.</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('frontpage.pariwisatadetail') }}">Lihat Detail</a>
                                <a class="btn btn-sm btn-success rounded py-2 px-4" href="">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pariwisata End -->
@endsection
