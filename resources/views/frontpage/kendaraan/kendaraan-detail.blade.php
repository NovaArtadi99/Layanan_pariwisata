@extends('frontpage.general.layout')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('/assets/template_user/assets/img/kendaraan/rentcar.webp');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Detail Kendaraan</h2>
            <ol>
                <li><a href="{{ route('frontpage.beranda') }}">Beranda</a></li>
                <li>Detail Kendaraan</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->
    {{-- Detail Car --}}
    <section class="ftco-section ftco-car-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="car-details">
                        <div class="img rounded" style="background-image: url('/assets/template_user/assets/img/kendaraan/car-1.jpg');"></div>
                        <div class="text text-center">
                            <span class="subheading">Cheverolet</span>
                            <h2>Mercedes Grand Sedan</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-tachometer-alt"></span>
                                </div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Mileage
                                        <span>40,000</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-cogs"></span>
                                </div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Transmission
                                        <span>Manual</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-chair"></span>
                                </div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Seats
                                        <span>5 Adults</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-suitcase"></span>
                                </div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Luggage
                                        <span>4 Bags</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-gas-pump"></span>
                                </div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Fuel
                                        <span>Petrol</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                        href="#pills-description" role="tab" aria-controls="pills-description"
                                        aria-expanded="true">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill"
                                        href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
                                        aria-expanded="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review"
                                        role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="fa fa-check"></span>Airconditions</li>
                                            <li class="check"><span class="fa fa-check"></span>Child Seat</li>
                                            <li class="check"><span class="fa fa-check"></span>GPS</li>
                                            <li class="check"><span class="fa fa-check"></span>Luggage</li>
                                            <li class="check"><span class="fa fa-check"></span>Music</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="fa fa-check"></span>Seat Belt</li>
                                            <li class="remove"><span class="fa fa-times"></span>Sleeping Bed</li>
                                            <li class="check"><span class="fa fa-check"></span>Water</li>
                                            <li class="check"><span class="fa fa-check"></span>Bluetooth</li>
                                            <li class="remove"><span class="fa fa-times"></span>Onboard computer</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check"><span class="fa fa-check"></span>Audio input</li>
                                            <li class="check"><span class="fa fa-check"></span>Long Term Trips</li>
                                            <li class="check"><span class="fa fa-check"></span>Car Kit</li>
                                            <li class="check"><span class="fa fa-check"></span>Remote central
                                                locking</li>
                                            <li class="check"><span class="fa fa-check"></span>Climate control</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel"
                                aria-labelledby="pills-manufacturer-tab">
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life One day however a small line of blind text by the name of Lorem
                                    Ipsum decided to leave for the far World of Grammar.</p>
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                                    skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline
                                    of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                                    continued her way.</p>
                            </div>

                            <div class="tab-pane fade" id="pills-review" role="tabpanel"
                                aria-labelledby="pills-review-tab">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3 class="head">23 Reviews</h3>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url('/assets/template_user/assets/img/kendaraan/person_1.jpg')">
                                            </div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span class="text-right"><a href="#" class="reply"><i
                                                                class="fa fa-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last
                                                    view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url('/assets/template_user/assets/img/kendaraan/person_2.jpg')">
                                            </div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span class="text-right"><a href="#" class="reply"><i
                                                                class="fa fa-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last
                                                    view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                        <div class="review d-flex">
                                            <div class="user-img" style="background-image: url('/assets/template_user/assets/img/kendaraan/person_3.jpg')">
                                            </div>
                                            <div class="desc">
                                                <h4>
                                                    <span class="text-left">Jacob Webb</span>
                                                    <span class="text-right">14 March 2018</span>
                                                </h4>
                                                <p class="star">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span class="text-right"><a href="#" class="reply"><i
                                                                class="fa fa-reply"></i></a></span>
                                                </p>
                                                <p>When she reached the first hills of the Italic Mountains, she had a last
                                                    view back on the skyline of her hometown Bookmarksgrov</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="rating-wrap">
                                            <h3 class="head">Give a Review</h3>
                                            <div class="wrap">
                                                <p class="star">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        (98%)
                                                    </span>
                                                    <span>20 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        (85%)
                                                    </span>
                                                    <span>10 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        (70%)
                                                    </span>
                                                    <span>5 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        (10%)
                                                    </span>
                                                    <span>0 Reviews</span>
                                                </p>
                                                <p class="star">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        (0%)
                                                    </span>
                                                    <span>0 Reviews</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Choose Car</span>
                    <h2 class="mb-2">Related Cars</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url('/assets/template_user/assets/img/kendaraan/car-1.jpg');">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="{{ route('frontpage.kendaraandetail') }}">Mercedes Grand Sedan</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Cheverolet</span>
                                <p class="price ml-auto">$500 <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book
                                    now</a> <a href="{{ route('frontpage.kendaraandetail') }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url('/assets/template_user/assets/img/kendaraan/car-2.jpg');">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="{{ route('frontpage.kendaraandetail') }}">Range Rover</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Subaru</span>
                                <p class="price ml-auto">$500 <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book
                                    now</a> <a href="{{ route('frontpage.kendaraandetail') }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url('/assets/template_user/assets/img/kendaraan/car-3.jpg');">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="{{ route('frontpage.kendaraandetail') }}">Mercedes Grand Sedan</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Cheverolet</span>
                                <p class="price ml-auto">$500 <span>/day</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book
                                    now</a> <a href="{{ route('frontpage.kendaraandetail') }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
