@extends('frontpage.general.layout')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('/assets/template_user/assets/img/penginapan/penginapanpage.png');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Penginapan</h2>
            <ol>
                <li><a href="{{ route('frontpage.beranda') }}">Beranda</a></li>
                <li>Penginapan</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->
    {{-- new --}}
    <div class="section properties py-5">
        <div class="container">
            <ul class="properties-filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Tampilkan Semua</a>
                </li>
                <li>
                    <a href="#!" data-filter=".apart">Apartemen</a>
                </li>
                <li>
                    <a href="#!" data-filter=".villa">Villa</a>
                </li>
                <li>
                    <a href="#!" data-filter=".hotel">Hotel</a>
                </li>
                {{-- <li>
                    <a href="#!" data-filter=".inn">Penginapan</a>
                </li>
                <li>
                    <a href="#!" data-filter=".homestay">Homestay</a>
                </li>
                <li>
                    <a href="#!" data-filter=".penthouse">Penthouse</a>
                </li> --}}
            </ul>
            <div class="row properties-box">
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 apart">
                    <div class="item">
                        <a href="{{ route('frontpage.penginapandetail') }}"><img src="/assets/template_user/assets/img/penginapan/property-01.jpg" style="width: 300px; height: 200px;" alt=""></a>
                        <span class="category">Luxury Villa</span>
                        <h6>$2.264.000</h6>
                        <h4><a href="{{ route('frontpage.penginapandetail') }}">18 Old Street Miami, OR 97219</a></h4>
                        <ul>
                            <li>Bedrooms: <span>8</span></li>
                            <li>Bathrooms: <span>8</span></li>
                            <li>Area: <span>545m2</span></li>
                            <li>Floor: <span>3</span></li>
                            <li>Parking: <span>6 spots</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="{{ route('frontpage.penginapandetail') }}">Jadwalkan Kunjungan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 villa">
                    <div class="item">
                        <a href="{{ route('frontpage.penginapandetail') }}"><img src="/assets/template_user/assets/img/penginapan/property-02.jpg" alt=""></a>
                        <span class="category">Luxury Villa</span>
                        <h6>$1.180.000</h6>
                        <h4><a href="{{ route('frontpage.penginapandetail') }}">54 New Street Florida, OR 27001</a></h4>
                        <ul>
                            <li>Bedrooms: <span>6</span></li>
                            <li>Bathrooms: <span>5</span></li>
                            <li>Area: <span>450m2</span></li>
                            <li>Floor: <span>3</span></li>
                            <li>Parking: <span>8 spots</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="{{ route('frontpage.penginapandetail') }}">Jadwalkan Kunjungan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 apart hotel">
                    <div class="item">
                        <a href="{{ route('frontpage.penginapandetail') }}"><img src="/assets/template_user/assets/img/penginapan/property-03.jpg" alt=""></a>
                        <span class="category">Luxury Villa</span>
                        <h6>$1.460.000</h6>
                        <h4><a href="{{ route('frontpage.penginapandetail') }}">26 Mid Street Portland, OR 38540</a></h4>
                        <ul>
                            <li>Bedrooms: <span>5</span></li>
                            <li>Bathrooms: <span>4</span></li>
                            <li>Area: <span>225m2</span></li>
                            <li>Floor: <span>3</span></li>
                            <li>Parking: <span>10 spots</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="{{ route('frontpage.penginapandetail') }}">Jadwalkan Kunjungan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 villa">
                    <div class="item">
                        <a href="{{ route('frontpage.penginapandetail') }}"><img src="/assets/template_user/assets/img/penginapan/property-04.jpg" alt=""></a>
                        <span class="category">Apartment</span>
                        <h6>$584.500</h6>
                        <h4><a href="{{ route('frontpage.penginapandetail') }}">12 Hope Street Portland, OR 12650</a></h4>
                        <ul>
                            <li>Bedrooms: <span>4</span></li>
                            <li>Bathrooms: <span>3</span></li>
                            <li>Area: <span>125m2</span></li>
                            <li>Floor: <span>25th</span></li>
                            <li>Parking: <span>2 cars</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="{{ route('frontpage.penginapandetail') }}">Jadwalkan Kunjungan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 hotel villa">
                    <div class="item">
                        <a href="{{ route('frontpage.penginapandetail') }}"><img src="/assets/template_user/assets/img/penginapan/property-05.jpg" alt=""></a>
                        <span class="category">Penthouse</span>
                        <h6>$925.600</h6>
                        <h4><a href="{{ route('frontpage.penginapandetail') }}">34 Hope Street Portland, OR 42680</a></h4>
                        <ul>
                            <li>Bedrooms: <span>4</span></li>
                            <li>Bathrooms: <span>4</span></li>
                            <li>Area: <span>180m2</span></li>
                            <li>Floor: <span>38th</span></li>
                            <li>Parking: <span>2 cars</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="{{ route('frontpage.penginapandetail') }}">Jadwalkan Kunjungan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 hotel apart">
                    <div class="item">
                        <a href="{{ route('frontpage.penginapandetail') }}"><img src="/assets/template_user/assets/img/penginapan/property-06.jpg" alt=""></a>
                        <span class="category">Modern Condo</span>
                        <h6>$450.000</h6>
                        <h4><a href="{{ route('frontpage.penginapandetail') }}">22 Hope Street Portland, OR 16540</a></h4>
                        <ul>
                            <li>Bedrooms: <span>3</span></li>
                            <li>Bathrooms: <span>2</span></li>
                            <li>Area: <span>165m2</span></li>
                            <li>Floor: <span>26th</span></li>
                            <li>Parking: <span>3 cars</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="{{ route('frontpage.penginapandetail') }}">Jadwalkan Kunjungan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 hotel villa">
                    <div class="item">
                        <a href="{{ route('frontpage.penginapandetail') }}"><img src="/assets/template_user/assets/img/penginapan/banner-01.jpg" alt=""></a>
                        <span class="category">Luxury Villa</span>
                        <h6>$980.000</h6>
                        <h4><a href="{{ route('frontpage.penginapandetail') }}">14 Mid Street Miami, OR 36450</a></h4>
                        <ul>
                            <li>Bedrooms: <span>8</span></li>
                            <li>Bathrooms: <span>8</span></li>
                            <li>Area: <span>550m2</span></li>
                            <li>Floor: <span>3</span></li>
                            <li>Parking: <span>12 spots</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="{{ route('frontpage.penginapandetail') }}">Jadwalkan Kunjungan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 hotel apart">
                    <div class="item">
                        <a href="{{ route('frontpage.penginapandetail') }}"><img src="/assets/template_user/assets/img/penginapan/banner-02.jpg" alt=""></a>
                        <span class="category">Luxury Villa</span>
                        <h6>$1.520.000</h6>
                        <h4><a href="{{ route('frontpage.penginapandetail') }}">26 Old Street Miami, OR 12870</a></h4>
                        <ul>
                            <li>Bedrooms: <span>12</span></li>
                            <li>Bathrooms: <span>15</span></li>
                            <li>Area: <span>380m2</span></li>
                            <li>Floor: <span>3</span></li>
                            <li>Parking: <span>14 spots</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="{{ route('frontpage.penginapandetail') }}">Jadwalkan Kunjungan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 hotel apart">
                    <div class="item">
                        <a href="{{ route('frontpage.penginapandetail') }}"><img src="/assets/template_user/assets/img/penginapan/banner-03.jpg" alt=""></a>
                        <span class="category">Luxury Villa</span>
                        <h6>$3.145.000</h6>
                        <h4><a href="{{ route('frontpage.penginapandetail') }}">34 New Street Miami, OR 24650</a></h4>
                        <ul>
                            <li>Bedrooms: <span>10</span></li>
                            <li>Bathrooms: <span>12</span></li>
                            <li>Area: <span>860m2</span></li>
                            <li>Floor: <span>3</span></li>
                            <li>Parking: <span>10 spots</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="{{ route('frontpage.penginapandetail') }}">Jadwalkan Kunjungan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a class="is_active" href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">>></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
