@extends('frontpage.general.layout')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('/assets/template_user/assets/img/beranda/pariwisatapage.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Detail Pariwisata</h2>
            <ol>
                <li><a href="{{ route('frontpage.beranda') }}">Beranda</a></li>
                <li>Detail Pariwisata</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 sidebar">
                    <div class="sidebar-wrap bg-light ftco-animate">
                        <h3 class="heading mb-4">Temukan Wisata</h3>
                        <form action="#">
                            <div class="fields">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Kota, Tujuan">
                                </div>
                                <div class="form-group">
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control"
                                            placeholder="Keyword search">
                                            <option value="">Pilih Lokasi</option>
                                            <option value="">Badung</option>
                                            <option value="">Denpasar</option>
                                            <option value="">Buleleng</option>
                                            <option value="">Gianyar</option>
                                            <option value="">Karangasem</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="checkin_date" class="form-control"
                                        placeholder="Tanggal Kunjungan">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Telusuri" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-wrap bg-light ftco-animate">
                        <h3 class="heading mb-4">Peringkat Bintang</h3>
                        <form method="post" class="star-rating">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="far fa-star"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="far fa-star"></i><i
                                                class="far fa-star"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="far fa-star"></i><i class="far fa-star"></i><i
                                                class="far fa-star"></i></span></p>
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    <p class="rate"><span><i class="fas fa-star"></i><i class="far fa-star"></i><i
                                                class="far fa-star"></i><i class="far fa-star"></i><i
                                                class="far fa-star"></i></span></p>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        {{-- <div class="col-md-12 ftco-animate">
                            <div class="single-slider owl-carousel">
                                <div class="item">
                                    <div class="hotel-img" style="background-image: url('/assets/template_user/assets/img/beranda/lempuyang.jpeg');"></div>
                                </div>
                                <div class="item">
                                    <div class="hotel-img" style="background-image: url(images/hotel-3.jpg);"></div>
                                </div>
                                <div class="item">
                                    <div class="hotel-img" style="background-image: url(images/hotel-4.jpg);"></div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-12 ftco-animate">
                            <div class="single-image">
                                <img src="/assets/template_user/assets/img/beranda/lempuyang.jpeg" alt="Lempuyang" class="pariwisata-img">
                            </div>
                        </div>
                        <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                            <span>Tempat Wisata Terbaik Kami</span>
                            <h2>Lempuyang Luhur</h2>
                            <p class="rate mb-5">
                                <span class="loc"><a href="#"><i class="fa fa-map"></i> Jln Antiga Kelod, Manggis Karangasem Bali</a></span>
                                <span class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    8 Rating</span>
                            </p>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                                skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of
                                her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                                continued her way.</p>
                            <div class="d-md-flex mt-5 mb-5">
                                <ul>
                                    <li>The Big Oxmox advised her not to do so</li>
                                    <li>When she reached the first hills of the Italic Mountains</li>
                                    <li>She had a last view back on the skyline of her hometown </li>
                                    <li>Bookmarksgrove, the headline of Alphabet </li>
                                </ul>
                                <ul class="ml-md-5">
                                    <li>Question ran over her cheek, then she continued</li>
                                    <li>Pityful a rethoric question ran</li>
                                    <li>Mountains, she had a last view back on the skyline</li>
                                    <li>Headline of Alphabet Village and the subline</li>
                                </ul>
                            </div>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                                skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of
                                her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                                continued her way.</p>
                        </div>
                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                            <h4 class="mb-4">Lihat Video</h4>
                            <div class="block-16">
                                <figure>
                                    <img src="/assets/template_user/assets/img/beranda/tanah lot.jpeg" alt="Image placeholder" class="img-fluid">
                                    <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span
                                            class="fa fa-play"></span></a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12 pariwisata-detail ftco-animate mb-5 mt-4">
                            <h4 class="mb-5">Pesan Tiket Sekarang</h4>
                            <div class="fields">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="select-wrap one-third">
                                                <div class="icon"><span class="fas fa-chevron-down"></span></div>
                                                <select name="" id="" class="form-control" placeholder="Guest">
                                                    <option value="0">Guest</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="select-wrap one-third">
                                                <div class="icon"><span class="fas fa-chevron-down"></span></div>
                                                <select name="" id="" class="form-control" placeholder="Children">
                                                    <option value="0">Children</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Check Availability" class="btn btn-primary py-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                            <h4 class="mb-4">Ulasan &amp; Peringkat</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="post" class="star-rating">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                <p class="rate"><span><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i> 100
                                                        Ratings</span></p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                <p class="rate"><span><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="far fa-star"></i> 30
                                                        Ratings</span></p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                <p class="rate"><span><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="far fa-star"></i><i class="far fa-star"></i> 5
                                                        Ratings</span></p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                <p class="rate"><span><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="far fa-star"></i><i
                                                            class="far fa-star"></i><i class="far fa-star"></i> 0
                                                        Ratings</span></p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                <p class="rate"><span><i class="fas fa-star"></i><i
                                                            class="far fa-star"></i><i class="far fa-star"></i><i
                                                            class="far fa-star"></i><i class="far fa-star"></i> 0
                                                        Ratings</span></p>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-5">
                            <h4 class="mb-4">Wisata Terkait</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="destination">
                                        <a href="hotel-single.html" class="img img-2"
                                            style="background-image: url(images/hotel-1.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                                                    <p class="rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <span>8 Rating</span>
                                                    </p>
                                                </div>
                                                <div class="two">
                                                    <span class="price per-price">$40<br><small>/night</small></span>
                                                </div>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i> Miami, Fl</span>
                                                <span class="ml-auto"><a href="#">Book Now</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="destination">
                                        <a href="hotel-single.html" class="img img-2"
                                            style="background-image: url(images/hotel-2.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                                                    <p class="rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <span>8 Rating</span>
                                                    </p>
                                                </div>
                                                <div class="two">
                                                    <span class="price per-price">$40<br><small>/night</small></span>
                                                </div>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i> Miami, Fl</span>
                                                <span class="ml-auto"><a href="#">Book Now</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="destination">
                                        <a href="hotel-single.html" class="img img-2"
                                            style="background-image: url(images/hotel-3.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                                                    <p class="rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <span>8 Rating</span>
                                                    </p>
                                                </div>
                                                <div class="two">
                                                    <span class="price per-price">$40<br><small>/night</small></span>
                                                </div>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i> Miami, Fl</span>
                                                <span class="ml-auto"><a href="#">Book Now</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section>
@endsection
