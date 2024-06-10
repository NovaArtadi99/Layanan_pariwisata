@extends('frontpage.general.layout')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h2 data-aos="fade-up">Bali Destinasi Wisata</h2>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        <p>Website sistem layanan pariwisata Bali adalah platform daring yang menyediakan berbagai
                            layanan terkait pariwisata di pulau Bali. Di dalamnya, pengguna dapat menemukan
                            layanan-layanan seperti wisata, penyewaan kendaraan, penginapan, dan pemandu wisata.</p>
                    </blockquote>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ route('frontpage.tentang') }}" class="btn-get-started">Mulai</a>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Tonton Video</span></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Mengapa Memilih Kami</h2>
            </div>
            <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
                <div class="col-xl-5 img-bg"
                    style="background-image: url('/assets/template_user/assets/img/beranda/about.jpg')"></div>
                <div class="col-xl-7 slides  position-relative">
                    <div class="slides-1 swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Beragam Pilihan Wisata</h3>
                                    <p>Kami menawarkan berbagai paket wisata yang mencakup objek wisata populer di
                                        Bali, mulai dari pantai yang eksotis, pura-pura yang megah, hingga
                                        tempat-tempat budaya yang menarik. Dengan beragamnya pilihan wisata yang
                                        kami sediakan, Anda dapat memilih pengalaman yang sesuai dengan minat dan
                                        preferensi Anda.</p>
                                </div>
                            </div><!-- End slide item -->
                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Kemudahan Penyewaan Kendaraan</h3>
                                    <p>Kami menyediakan layanan penyewaan kendaraan yang memudahkan Anda untuk
                                        menjelajahi Bali secara mandiri. Dari mobil hingga sepeda, kami memiliki
                                        berbagai pilihan kendaraan yang dapat disesuaikan dengan kebutuhan
                                        perjalanan Anda. Dengan layanan penyewaan kendaraan kami, Anda dapat
                                        merencanakan perjalanan Anda dengan fleksibilitas dan kenyamanan.</p>
                                </div>
                            </div><!-- End slide item -->
                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Ragam Penginapan</h3>
                                    <p>Kami menawarkan informasi dan pilihan penginapan yang beragam di berbagai
                                        lokasi di Bali. Mulai dari hotel mewah, vila yang eksklusif, hingga
                                        penginapan budget, kami memiliki opsi penginapan untuk memenuhi berbagai
                                        kebutuhan dan anggaran Anda. Dengan memilih penginapan melalui kami, Anda
                                        dapat menikmati akomodasi yang nyaman dan sesuai dengan preferensi Anda
                                        selama liburan di Bali.</p>
                                </div>
                            </div><!-- End slide item -->
                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Layanan Pemandu Profesional</h3>
                                    <p>Kami memiliki tim pemandu wisata yang berpengalaman dan berpengetahuan luas
                                        tentang destinasi wisata di Bali. Pemandu kami akan membantu Anda
                                        menjelajahi tempat-tempat wisata terbaik, memberikan informasi sejarah dan
                                        budaya, serta memberikan saran tentang kegiatan dan tempat makan terbaik di
                                        sekitar lokasi tersebut. Dengan bantuan pemandu kami, Anda dapat
                                        mengoptimalkan pengalaman liburan Anda dan menjadikannya lebih berkesan.</p>
                                </div>
                            </div><!-- End slide item -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section><!-- End Why Choose Us Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Layanan Kami</h2>
            </div>
            <div class="row service-grid-grids text-center">
                <div class="col-lg-4 col-md-6 service-grid service-grid1 mb-4">
                    <div class="service-icon">
                        <img src="/assets/template_user/assets/img/beranda/icon-pariwisata.jpeg"
                            style="width: 100px; height: 100px;" alt="Layanan Pariwisata">
                    </div>
                    <h4 class="mt-3">Layanan Pariwisata</h4>
                    <p class="mt-3">Menyediakan paket wisata yang mencakup objek wisata populer di Bali,
                        seperti pantai, pura, dan tempat-tempat budaya lainnya. Paket ini mencakup transportasi,
                        tiket masuk, dan pemandu wisata.</p>
                </div>
                <div class="col-lg-4 col-md-6 service-grid service-grid2 mb-4">
                    <div class="service-icon">
                        <img src="/assets/template_user/assets/img/beranda/icon-motor.jpeg"
                            style="width: 100px; height: 100px;" alt="Layanan Pariwisata">
                    </div>
                    <h4 class="mt-3">Sewa Kendaraan</h4>
                    <p class="mt-3">Menyediakan berbagai jenis kendaraan, mulai dari mobil, motor,
                        hingga sepeda, untuk menjelajahi Bali secara mandiri sesuai dengan preferensi dan
                        kebutuhan pengguna.</p>
                </div>

                <div class="col-lg-4 col-md-6 service-grid service-grid3 mb-4">
                    <div class="service-icon">
                        <img src="/assets/template_user/assets/img/beranda/icon-penginapan.jpeg"
                            style="width: 100px; height: 100px;" alt="Layanan Pariwisata">
                    </div>
                    <h4 class="mt-3">Penginapan</h4>
                    <p class="mt-3">Menawarkan informasi dan pilihan penginapan, mulai dari hotel mewah,
                        vila, guesthouse, hingga penginapan budget, di berbagai lokasi di Bali.</p>
                </div>
                <div class="col-lg-4 col-md-6 service-grid service-grid4 mb-4">
                    <div class="service-icon">
                        <img src="/assets/template_user/assets/img/beranda/icon-guide.jpeg"
                            style="width: 100px; height: 100px;" alt="Layanan Pariwisata">
                    </div>
                    <h4 class="mt-3">Pemandu Wisata</h4>
                    <p class="mt-3">Menyediakan layanan pemandu wisata yang berpengalaman dan
                        berpengetahuan luas tentang destinasi wisata di Bali. Mereka membantu pengguna untuk
                        menjelajahi tempat-tempat wisata, memberikan informasi sejarah dan budaya, serta
                        memberikan saran tentang kegiatan dan tempat makan terbaik.</p>
                </div>
                <div class="col-lg-4 col-md-6 service-grid service-grid5 mb-4">
                    <div class="service-icon">
                        <img src="/assets/template_user/assets/img/beranda/icon-paket.jpeg"
                            style="width: 100px; height: 100px;" alt="Layanan Pariwisata">
                    </div>
                    <h4 class="mt-3">Paket Layanan</h4>
                    <p class="mt-3">Menawarkan paket-paket layanan yang terintegrasi, mencakup kombinasi
                        dari layanan pariwisata, penyewaan kendaraan, penginapan, dan pemandu wisata untuk
                        pengalaman liburan yang lengkap dan nyaman di Bali.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Services Section -->

    {{-- Car --}}
    {{-- <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                    <h2 class="mb-2">Feeatured Vehicles</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-car owl-carousel">
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url(images/car-1.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">$500 <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#"
                                            class="btn btn-primary py-2 mr-1">Book now</a> <a href="#"
                                            class="btn btn-secondary py-2 ml-1">Details</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url(images/car-2.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">$500 <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#"
                                            class="btn btn-primary py-2 mr-1">Book now</a> <a href="#"
                                            class="btn btn-secondary py-2 ml-1">Details</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url(images/car-3.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">$500 <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#"
                                            class="btn btn-primary py-2 mr-1">Book now</a> <a href="#"
                                            class="btn btn-secondary py-2 ml-1">Details</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url(images/car-4.jpg);">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat">Cheverolet</span>
                                        <p class="price ml-auto">$500 <span>/day</span></p>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="#"
                                            class="btn btn-primary py-2 mr-1">Book now</a> <a href="#"
                                            class="btn btn-secondary py-2 ml-1">Details</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h3>Temukan Keindahan Pulau Dewata dengan Mudah</h3>
                    <p>Rencanakan Petualangan Anda di Bali dengan Lebih Banyak Pilihan</p>
                    <a class="cta-btn" href="#">Dapatkan Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action Section -->

    <!-- ======= Galeri Section ======= -->
    {{-- <section class="gallery py-5" id="gallery">
        <div class="container py-md-3" data-aos="fade-up">
            <div class="header mb-3 mb-sm-5 text-center">
                <div class="section-header">
                    <h2>Galeri Wisata</h2>
                </div>
                <div class="row news-grids text-center">
                    <div class="col-md-4 gal-img">
                        <a href="#gal1"><img src="/assets/template_user/assets/img/beranda/lempuyang.jpeg"
                                style="width: 1000px; height: 400px;" alt="news image" class="img-fluid"><span
                                class="gallery-text">
                                Lempuyang</span></a>
                        <a href="#gal2"><img src="/assets/template_user/assets/img/beranda/bali handara golf.jpeg"
                                style="width: 1000px; height: 400px;" alt="news image" class="img-fluid"><span
                                class="gallery-text">Bali
                                Handara</span></a>
                    </div>
                    <div class="col-md-4 gal-img">
                        <a href="#gal3"><img src="/assets/template_user/assets/img/beranda/danau-tamblingan.jpeg"
                                style="width: 1000px; height: 400px;" alt="news image" class="img-fluid"><span
                                class="gallery-text">Danau
                                Tamblingan</span></a>
                        <a href="#gal4"><img src="/assets/template_user/assets/img/beranda/kelingking beach.jpeg"
                                style="width: 1000px; height: 400px;" alt="news image" class="img-fluid"><span
                                class="gallery-text">Pantai
                                Kelingking</span></a>
                    </div>
                    <div class="col-md-4 gal-img">
                        <a href="#gal5"><img src="/assets/template_user/assets/img/beranda/tanah lot.jpeg"
                                style="width: 1000px; height: 400px;" alt="news image" class="img-fluid"><span
                                class="gallery-text">Tanah
                                Lot</span></a>
                        <a href="#gal6"><img src="/assets/template_user/assets/img/beranda/ubud.jpeg"
                                style="width: 1000px; height: 400px;" alt="news image" class="img-fluid"><span
                                class="gallery-text">Ubud
                                Market</span></a>
                    </div>
                </div>
            </div>
            <!-- popup-->
            <div id="gal1" class="pop-overlay animate">
                <div class="popup">
                    <img src="/assets/template_user/assets/img/beranda/lempuyang.jpeg" alt="Popup Image"
                        class="img-fluid" />
                    <p class="mt-4">Pura Lempuyang, juga dikenal sebagai “Gerbang Surga Bali,” adalah kompleks
                        pura Hindu yang terletak di lereng Gunung Lempuyang. Pura ini terdiri dari serangkaian tujuh
                        pura yang memukau, dan dikenal dengan gerbang khasnya yang membingkai Gunung Agung di
                        kejauhan.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal2" class="pop-overlay animate">
                <div class="popup">
                    <img src="/assets/template_user/assets/img/beranda/bali handara golf.jpeg" alt="Popup Image"
                        class="img-fluid" />
                    <p class="mt-4">Bali Handara Iconic Gate menyajikan keindahan gapura atau gerbang masuk
                        dengan ornamen dan ukiran tradisional khas Bali, yang tampil ikonik serta eksotis. Gapura
                        tersebut bukanlah pemandangan baru. Gapura ini sudah ada sejak berdirinya lapangan golf yang
                        dulunya bernama Bali Handara Kosaido, karena memang pernah bekerjasama dengan perusahaan
                        asal negara Jepang selama 22 tahun. Sehingga, branding Kosaido tersebut cukup melekat sampai
                        sekarang.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal3" class="pop-overlay animate">
                <div class="popup">
                    <img src="/assets/template_user/assets/img/beranda/danau-tamblingan.jpeg" alt="Popup Image"
                        class="img-fluid" />
                    <p class="mt-4">Danau Tamblingan dapat menjadi salah satu referensi terbaik apabila Anda
                        ingin menikmati keindahan alam dari pulau Dewata Bali. Berada di utara Gunung Lesung,
                        kawasan wisata tersebut sangat populer karena keindahannya dan menjadi tempat sakral karena
                        terdapat 11 pura.
                    </p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup3 -->
            <!-- popup-->
            <div id="gal4" class="pop-overlay animate">
                <div class="popup">
                    <img src="/assets/template_user/assets/img/beranda/kelingking beach.jpeg" alt="Popup Image"
                        class="img-fluid" />
                    <p class="mt-4">Kelingking Beach dijuluki sebagai salah satu pantai paling instagramable di
                        dunia. Kelingking Beach berada di pesisir barat daya Nusa Penida dengan pasir putih lembut
                        yang terhampar di sepanjang pantainya. Selain itu pantai ini menyajikan pemandangan laut
                        biru yang jernih yang memanjakan mata.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal5" class="pop-overlay animate">
                <div class="popup">
                    <img src="/assets/template_user/assets/img/beranda/tanah lot.jpeg" alt="Popup Image"
                        class="img-fluid" />
                    <p class="mt-4">Tanah lot adalah objek wisata Bali yang terdapat pura di atas tebing batu
                        karang berwarna hitam. Lokasinya berada di pesisir pantai dan umumnya pura tersebut
                        menghadap ke lautan lepas. Ada sebuah pura yang dibangun tepat di atas batu karang hitam
                        tersebut, dan memiliki nama Tanah Lot.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal6" class="pop-overlay animate">
                <div class="popup">
                    <img src="/assets/template_user/assets/img/beranda/ubud.jpeg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Pasar Seni Ubud, ada banyak barang-barang yang kita bisa beli terutama
                        souvernir, pakaian, dan kesenian-kesenian lain khas Bali. Disekitarnya juga ada Puri Saren
                        yang merupakan salah satu atraksi budaya dan sejarah yang terkenal di kawasan Ubud, dan juga
                        masih ditinggli oleh keluarga kerajaan sampai saat ini.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
            <!-- //popup -->
        </div>
    </section> --}}
    <!-- End Galeri Section -->

    <!-- ======= Pariwisata Beranda ======= -->
    <section class="gallery" id="pariwisata-gallery">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Paket Wisata Teratas</h2>
            </div>
            <div class="row">
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="{{ route('frontpage.pariwisatadetail') }}" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url('/assets/template_user/assets/img/beranda/lempuyang.jpeg');">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="fas fa-search"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">Lempuyang</a></h3>
                                    <p class="rate">
                                        {{-- <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i> --}}
                                        <span class="price">Rp200.000</span>
                                    </p>
                                    <p class="bottom-text">
                                        <span><i class="fas fa-map-marker-alt"></i>Karangasem, Bali</span>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span class="ml-auto"><a href="{{ route('frontpage.pariwisatadetail') }}">Temukan</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="{{ route('frontpage.pariwisatadetail') }}" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url('/assets/template_user/assets/img/beranda/bali handara golf.jpeg');">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="fas fa-search"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">Bali Handara Golf</a></h3>
                                    <p class="rate">
                                        {{-- <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i> --}}
                                        <span class="price">Rp200.000</span>
                                    </p>
                                    <p class="bottom-text">
                                        <span><i class="fas fa-map-marker-alt"></i>Tabanan, Bali</span>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span class="ml-auto"><a href="{{ route('frontpage.pariwisatadetail') }}">Temukan</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="{{ route('frontpage.pariwisatadetail') }}" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url('/assets/template_user/assets/img/beranda/danau-tamblingan.jpeg');">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="fas fa-search"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">Danau Tamblingan</a></h3>
                                    <p class="rate">
                                        {{-- <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i> --}}
                                        <span class="price">Rp200.000</span>
                                    </p>
                                    <p class="bottom-text">
                                        <span><i class="fas fa-map-marker-alt"></i>Buleleng, Bali</span>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span class="ml-auto"><a href="{{ route('frontpage.pariwisatadetail') }}">Temukan</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="{{ route('frontpage.pariwisatadetail') }}" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url('/assets/template_user/assets/img/beranda/kelingking beach.jpeg');">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="fas fa-search"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">Pantai Kelingking</a></h3>
                                    <p class="rate">
                                        {{-- <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i> --}}
                                        <span class="price">Rp200.000</span>
                                    </p>
                                    <p class="bottom-text">
                                        <span><i class="fas fa-map-marker-alt"></i>Klungkung, Bali</span>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span class="ml-auto"><a href="{{ route('frontpage.pariwisatadetail') }}">Temukan</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="{{ route('frontpage.pariwisatadetail') }}" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url('/assets/template_user/assets/img/beranda/tanah lot.jpeg');">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="fas fa-search"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="#">Tanah Lot</a></h3>
                                    <p class="rate">
                                        {{-- <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i> --}}
                                        <span class="price">Rp200.000</span>
                                    </p>
                                    <p class="bottom-text">
                                        <span><i class="fas fa-map-marker-alt"></i>Tabanan, Bali</span>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span class="ml-auto"><a href="{{ route('frontpage.pariwisatadetail') }}">Temukan</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pariwisata Beranda -->

    <!-- ======= Hotel Beranda ======= -->
    <section class="gallery" id="hotel-gallery">
        <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Hotel & Kamar Terpopuler</h2>
                </div>
                <div class="row">
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="destination">
                            <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                                style="background-image: url('/assets/template_support/pariwisata/images/hotel-1.jpg');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="fas fa-search"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Hotel, Italy</a></h3>
                                        <p class="rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </p>
                                        <p class="bottom-price">
                                            <span class="price per-price">Rp400.000<small>/malam</small></span>
                                        </p>
                                        <p class="bottom-text">
                                            <span><i class="fas fa-map-marker-alt"></i>Karangasem, Bali</span>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <span class="ml-auto"><a href="#">Pesan Sekarang</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="destination">
                            <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                                style="background-image: url('/assets/template_support/pariwisata/images/hotel-2.jpg');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="fas fa-search"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Hotel, Italy</a></h3>
                                        <p class="rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </p>
                                        <p class="bottom-price">
                                            <span class="price per-price">Rp400.000<small>/malam</small></span>
                                        </p>
                                        <p class="bottom-text">
                                            <span><i class="fas fa-map-marker-alt"></i>Karangasem, Bali</span>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <span class="ml-auto"><a href="#">Pesan Sekarang</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="destination">
                            <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                                style="background-image: url('/assets/template_support/pariwisata/images/hotel-3.jpg');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="fas fa-search"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Hotel, Italy</a></h3>
                                        <p class="rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </p>
                                        <p class="bottom-price">
                                            <span class="price per-price">Rp400.000<small>/malam</small></span>
                                        </p>
                                        <p class="bottom-text">
                                            <span><i class="fas fa-map-marker-alt"></i>Karangasem, Bali</span>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <span class="ml-auto"><a href="#">Pesan Sekarang</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="destination">
                            <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                                style="background-image: url('/assets/template_support/pariwisata/images/hotel-4.jpg');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="fas fa-search"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Hotel, Italy</a></h3>
                                        <p class="rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </p>
                                        <p class="bottom-price">
                                            <span class="price per-price">Rp400.000<small>/malam</small></span>
                                        </p>
                                        <p class="bottom-text">
                                            <span><i class="fas fa-map-marker-alt"></i>Karangasem, Bali</span>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <span class="ml-auto"><a href="#">Pesan Sekarang</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-md-6 col-lg ftco-animate">
                        <div class="destination">
                            <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                                style="background-image: url('/assets/template_support/pariwisata/images/hotel-5.jpg');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="fas fa-search"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Hotel, Italy</a></h3>
                                        <p class="rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </p>
                                        <p class="bottom-price">
                                            <span class="price per-price">Rp400.000<small>/malam</small></span>
                                        </p>
                                        <p class="bottom-text">
                                            <span><i class="fas fa-map-marker-alt"></i>Karangasem, Bali</span>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <span class="ml-auto"><a href="#">Pesan Sekarang</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- End Hotel Beranda -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts">
        <div class="container">
            <div class="section-header">
                <h2>Blog Terbaru</h2>
            </div>
            {{-- <p align="center">Maaf, untuk saat ini blog belum tersedia.</p> --}}
            {{-- <div class="row gy-5">
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="post-box">
                        <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="meta">
                            <span class="post-date">Fri, September 05</span>
                            <span class="post-author"> / Mario Douglas</span>
                        </div>
                        <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
                        <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum
                            assumenda. Quisquam omnis doloribus...</p>
                        <a href="{{ route('frontpage.beritadetail') }}" class="readmore stretched-link"><span>Baca Selengkapnya</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div> --}}
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('/assets/template_support/pariwisata/images/hotel-5.jpg');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">10</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2024</span>
                                    <span class="mos">Mei</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="{{ route('frontpage.blogdetail') }}">Inilah 5 Hotel Terbaik Yang Ada di Bali</a></h3>
                            <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
                            <p><a href="{{ route('frontpage.blogdetail') }}" class="btn btn-primary">Baca Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url('/assets/template_user/assets/img/beranda/ubud.jpeg');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">11</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2024</span>
                                    <span class="mos">Mei</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="{{ route('frontpage.blogdetail') }}">Ubud Menjadi Wisata Paling Favorit di Bali</a></h3>
                            <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
                            <p><a href="{{ route('frontpage.blogdetail') }}" class="btn btn-primary">Baca Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url('/assets/template_user/assets/img/beranda/tanah lot.jpeg');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">19</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2024</span>
                                    <span class="mos">Mei</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="{{ route('frontpage.blogdetail') }}">Tanah Wisata Yang Tidak Bisa Dikunjungi Oleh Pasangan Yang Belum Menikah</a></h3>
                            <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
                            <p><a href="{{ route('frontpage.blogdetail') }}" class="btn btn-primary">Baca Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Recent Blog Posts Section -->

    <!-- ======= Berita Section ======= -->
    <section id="recent-posts" class="recent-posts">
        <div class="container">
            <div class="section-header">
                <h2>Postingan Berita Terbaru</h2>
            </div>
            <div class="row gy-5">
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div class="post-img"><img src="/assets/template_user/assets/img/beranda/berita/berita1.jpeg"
                                class="img-fluid" alt=""></div>
                        <div class="post-content">
                            <div class="meta">
                                <span class="post-date">Kamis, 16 Mei 2024</span>
                                {{-- <span class="post-author"> / Nova</span> --}}
                            </div>
                            <h3 class="post-title">Bali Masuk 10 Destinasi Teratas di Musim Panas, Kalahkan Bangkok</h3>
                            <p>Bangkok dan Bali merupakan dua destinasi favorit bagi turis yang mencari wisata pantai dan
                                musim panas. Di musim panas tahun ini, Bali unggul atas Bangkok.</p>
                            <a href="{{ route('frontpage.beritadetail') }}" class="readmore stretched-link"><span>Baca Lebih Lanjut</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div class="post-img"><img src="/assets/template_user/assets/img/beranda/berita/berita2.jpeg"
                                class="img-fluid" alt=""></div>
                        <div class="post-content">
                            <div class="meta">
                                <span class="post-date">Jumat, 17 Mei 2024</span>
                                {{-- <span class="post-author"> / Nova</span> --}}
                            </div>
                            <h3 class="post-title">Viral Kawasan Moskow Baru di Peta Bali</h3>
                            <p>Media sosial dihebohkan dengan kemunculan kawasan bernama Moskow Baru di peta Provinsi Bali.
                                Bagaimana kebenarannya?</p>
                            <a href="{{ route('frontpage.beritadetail') }}" class="readmore stretched-link"><span>Baca Lebih Lanjut</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div class="post-img"><img src="/assets/template_user/assets/img/beranda/berita/berita3.jpeg"
                                class="img-fluid" alt=""></div>
                        <div class="post-content">
                            <div class="meta">
                                <span class="post-date">Sabtu, 18 Mei 2024</span>
                                {{-- <span class="post-author"> / Nova</span> --}}
                            </div>
                            <h3 class="post-title">5 Rekomendasi Tempat untuk Me Time di Bali, Murah dan Bikin Tenang</h3>
                            <p>Bali juga menawarkan berbagai tempat yang cocok untuk digunakan sebagai tempat me time.</p>
                            <a href="{{ route('frontpage.beritadetail') }}" class="readmore stretched-link"><span>Baca Lebih Lanjut</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div class="post-img"><img src="/assets/template_user/assets/img/beranda/berita/berita4.jpeg"
                                class="img-fluid" alt=""></div>
                        <div class="post-content">
                            <div class="meta">
                                <span class="post-date">Minggu, 19 Mei 2024</span>
                                {{-- <span class="post-author"> / Nova</span> --}}
                            </div>
                            <h3 class="post-title">Wow! Simak 5 Desain Spektakuler dari Patung GWK</h3>
                            <p>Sebelum berdiri megah dan diresmikan pada 2018, ternyata desain Patung GWK mengalami
                                perubahan sebanyak lima kali Apa alasannya?</p>
                            <a href="{{ route('frontpage.beritadetail') }}" class="readmore stretched-link"><span>Baca Lebih Lanjut</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Recent Blog Posts Section -->
@endsection
