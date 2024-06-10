@extends('frontpage.general.layout')
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('/assets/template_user/assets/img/beranda/aboutme.webp');">
            <div class="container position-relative d-flex flex-column align-items-center">
                <h2>Tentang</h2>
                <ol>
                    <li><a href="{{ route('frontpage.beranda') }}">Beranda</a></li>
                    <li>Tentang</li>
                </ol>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-content">
                            <div class="section-header">
                                <h2>Tentang Kami</h2>
                            </div>
                            <div class="video-thumbnail margin-bottom30" data-wow-delay="0.4s">
                                <img src="/assets/template_user/assets/img/beranda/aboutkami.webp"
                                    alt="Tentang Forstaff" title="Tentang Forstaff" width="1070" height="599">
                            </div>
                            <p class="description wow pixFadeUp" data-wow-delay="0.6s" align="justify">
                                Website sistem layanan pariwisata Bali adalah satu-satunya sumber terpercaya untuk
                                menjadikan petualangan Anda di Pulau Dewata tak terlupakan. Dengan rangkaian layanan lengkap
                                yang meliputi wisata, penyewaan kendaraan, penginapan, dan pemandu wisata, kami menjadi
                                mitra setia Anda dalam merencanakan dan mengatur setiap detil perjalanan Anda. Dari
                                pantai-pantai berpasir putih hingga reruntuhan pura kuno, dari jalan-jalan sepi pedesaan
                                hingga keramaian pasar tradisional, kami hadir untuk memastikan pengalaman Anda di Bali
                                menjadi yang terbaik. Dengan platform daring kami yang mudah digunakan, Anda dapat dengan
                                cepat dan mudah menjelajahi berbagai opsi, memesan dengan nyaman, dan fokus pada hal yang
                                benar-benar penting: menikmati keindahan dan keajaiban pulau ini tanpa khawatir. Jadikanlah
                                perjalanan Anda menjadi sebuah kisah yang tak terlupakan dengan bantuan kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End About Section -->

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

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Tim Kami</h2>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="/assets/template_user/assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Nova Artadi</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="/assets/template_user/assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Ida Ayu Mustika</h4>
                                <span>Product Manager</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="/assets/template_user/assets/img/team/team-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Anak Agung Merta</h4>
                                <span>CTO</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="/assets/template_user/assets/img/team/team-4.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Cokorda Ayu</h4>
                                <span>Accountant</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>
        </section><!-- End Team Section -->

    </main>
@endsection
