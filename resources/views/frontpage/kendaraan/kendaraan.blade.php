@extends('frontpage.general.layout')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('/assets/template_user/assets/img/kendaraan/rentcar.webp');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Kendaraan</h2>
            <ol>
                <li><a href="{{ route('frontpage.beranda') }}">Beranda</a></li>
                <li>Kendaraan</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <!------------ Gallery section ------------>
    <section id="hotels" class="parallax">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header" data-wow-delay="1s">
                        <h2>Sewa Kendaraan</h2>
                    </div>
                    <!-- iso section -->
                    <div class="section properties">
                        <div class="container">
                            <ul class="properties-filter">
                                <li>
                                    <a class="is_active" href="#!" data-filter="*">Semua</a>
                                </li>
                                <li>
                                    <a href="#!" data-filter=".mobil">Mobil</a>
                                </li>
                                <li>
                                    <a href="#!" data-filter=".motor">Motor</a>
                                </li>
                                <li>
                                    <a href="#!" data-filter=".taksi">Taksi</a>
                                </li>
                            </ul>
                            {{--  --}}
                            <div class="row properties-box">
                                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 mobil">
                                    <div class="car-wrap rounded ftco-animate">
                                        <div class="img rounded d-flex align-items-end"
                                            style="background-image: url('/assets/template_user/assets/img/kendaraan/car-1.jpg');">
                                        </div>
                                        <div class="text">
                                            <h2 class="mb-0"><a href="{{ route('frontpage.kendaraandetail') }}">Mercedes Grand Sedan</a></h2>
                                            <div class="d-flex mb-3">
                                                <span class="cat">Cheverolet</span>
                                                <p class="price ml-auto">$500 <span>/day</span></p>
                                            </div>
                                            <p class="d-flex mb-0 d-block"><a href="#"
                                                    class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{ route('frontpage.kendaraandetail') }}"
                                                    class="btn btn-secondary py-2 ml-1">Details</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 mobil">
                                    <div class="car-wrap rounded ftco-animate">
                                        <div class="img rounded d-flex align-items-end"
                                            style="background-image: url('/assets/template_user/assets/img/kendaraan/car-2.jpg');">
                                        </div>
                                        <div class="text">
                                            <h2 class="mb-0"><a href="{{ route('frontpage.kendaraandetail') }}">Range Rover</a></h2>
                                            <div class="d-flex mb-3">
                                                <span class="cat">Subaru</span>
                                                <p class="price ml-auto">$500 <span>/day</span></p>
                                            </div>
                                            <p class="d-flex mb-0 d-block"><a href="#"
                                                    class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{ route('frontpage.kendaraandetail') }}"
                                                    class="btn btn-secondary py-2 ml-1">Details</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 mobil">
                                    <div class="car-wrap rounded ftco-animate">
                                        <div class="img rounded d-flex align-items-end"
                                            style="background-image: url('/assets/template_user/assets/img/kendaraan/car-3.jpg');">
                                        </div>
                                        <div class="text">
                                            <h2 class="mb-0"><a href="{{ route('frontpage.kendaraandetail') }}">Mercedes Grand Sedan</a></h2>
                                            <div class="d-flex mb-3">
                                                <span class="cat">Cheverolet</span>
                                                <p class="price ml-auto">$500 <span>/day</span></p>
                                            </div>
                                            <p class="d-flex mb-0 d-block"><a href="#"
                                                    class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{ route('frontpage.kendaraandetail') }}"
                                                    class="btn btn-secondary py-2 ml-1">Details</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 mobil">
                                    <div class="car-wrap rounded ftco-animate">
                                        <div class="img rounded d-flex align-items-end"
                                            style="background-image: url('/assets/template_user/assets/img/kendaraan/car-4.jpg');">
                                        </div>
                                        <div class="text">
                                            <h2 class="mb-0"><a href="{{ route('frontpage.kendaraandetail') }}">Mercedes Grand Sedan</a></h2>
                                            <div class="d-flex mb-3">
                                                <span class="cat">Cheverolet</span>
                                                <p class="price ml-auto">$500 <span>/day</span></p>
                                            </div>
                                            <p class="d-flex mb-0 d-block"><a href="#"
                                                    class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{ route('frontpage.kendaraandetail') }}"
                                                    class="btn btn-secondary py-2 ml-1">Details</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 mobil">
                                    <div class="car-wrap rounded ftco-animate">
                                        <div class="img rounded d-flex align-items-end"
                                            style="background-image: url('/assets/template_user/assets/img/kendaraan/car-5.jpg');">
                                        </div>
                                        <div class="text">
                                            <h2 class="mb-0"><a href="{{ route('frontpage.kendaraandetail') }}">Range Rover</a></h2>
                                            <div class="d-flex mb-3">
                                                <span class="cat">Subaru</span>
                                                <p class="price ml-auto">$500 <span>/day</span></p>
                                            </div>
                                            <p class="d-flex mb-0 d-block"><a href="#"
                                                    class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{ route('frontpage.kendaraandetail') }}"
                                                    class="btn btn-secondary py-2 ml-1">Details</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 mobil">
                                    <div class="car-wrap rounded ftco-animate">
                                        <div class="img rounded d-flex align-items-end"
                                            style="background-image: url('/assets/template_user/assets/img/kendaraan/car-6.jpg');">
                                        </div>
                                        <div class="text">
                                            <h2 class="mb-0"><a href="{{ route('frontpage.kendaraandetail') }}">Mercedes Grand Sedan</a></h2>
                                            <div class="d-flex mb-3">
                                                <span class="cat">Cheverolet</span>
                                                <p class="price ml-auto">$500 <span>/day</span></p>
                                            </div>
                                            <p class="d-flex mb-0 d-block"><a href="#"
                                                    class="btn btn-primary py-2 mr-1">Book now</a> <a
                                                    href="{{ route('frontpage.kendaraandetail') }}" class="btn btn-secondary py-2 ml-1">Details</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- Motor --}}
                                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 motor">
                                    <div class="car-wrap rounded ftco-animate">
                                        <div class="img rounded d-flex align-items-end"
                                            style="background-image: url('/assets/template_user/assets/img/kendaraan/motor_1.jpg');">
                                        </div>
                                        <div class="text">
                                            <h2 class="mb-0"><a href="{{ route('frontpage.kendaraandetail') }}">Mercedes Grand Sedan</a></h2>
                                            <div class="d-flex mb-3">
                                                <span class="cat">Cheverolet</span>
                                                <p class="price ml-auto">$500 <span>/day</span></p>
                                            </div>
                                            <p class="d-flex mb-0 d-block"><a href="#"
                                                    class="btn btn-primary py-2 mr-1">Book now</a> <a
                                                    href="{{ route('frontpage.kendaraandetail') }}" class="btn btn-secondary py-2 ml-1">Details</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 motor">
                                    <div class="car-wrap rounded ftco-animate">
                                        <div class="img rounded d-flex align-items-end"
                                            style="background-image: url('/assets/template_user/assets/img/kendaraan/motor_1.jpg');">
                                        </div>
                                        <div class="text">
                                            <h2 class="mb-0"><a href="{{ route('frontpage.kendaraandetail') }}">Mercedes Grand Sedan</a></h2>
                                            <div class="d-flex mb-3">
                                                <span class="cat">Cheverolet</span>
                                                <p class="price ml-auto">$500 <span>/day</span></p>
                                            </div>
                                            <p class="d-flex mb-0 d-block"><a href="#"
                                                    class="btn btn-primary py-2 mr-1">Book now</a> <a
                                                    href="{{ route('frontpage.kendaraandetail') }}" class="btn btn-secondary py-2 ml-1">Details</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 motor">
                                    <div class="car-wrap rounded ftco-animate">
                                        <div class="img rounded d-flex align-items-end"
                                            style="background-image: url('/assets/template_user/assets/img/kendaraan/motor_1.jpg');">
                                        </div>
                                        <div class="text">
                                            <h2 class="mb-0"><a href="{{ route('frontpage.kendaraandetail') }}">Mercedes Grand Sedan</a></h2>
                                            <div class="d-flex mb-3">
                                                <span class="cat">Cheverolet</span>
                                                <p class="price ml-auto">$500 <span>/day</span></p>
                                            </div>
                                            <p class="d-flex mb-0 d-block"><a href="#"
                                                    class="btn btn-primary py-2 mr-1">Book now</a> <a
                                                    href="{{ route('frontpage.kendaraandetail') }}" class="btn btn-secondary py-2 ml-1">Details</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- Taksi --}}
                                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 taksi">
                                    <div class="car-wrap rounded ftco-animate">
                                        <div class="img rounded d-flex align-items-end"
                                            style="background-image: url('/assets/template_user/assets/img/kendaraan/car-7.jpg');">
                                        </div>
                                        <div class="text">
                                            <h2 class="mb-0"><a href="{{ route('frontpage.kendaraandetail') }}">Sedan</a></h2>
                                            <div class="d-flex mb-3">
                                                <span class="cat">Cheverolet</span>
                                                <p class="price ml-auto">$500 <span>/day</span></p>
                                            </div>
                                            <p class="d-flex mb-0 d-block"><a href="#"
                                                    class="btn btn-primary py-2 mr-1">Book now</a> <a
                                                    href="{{ route('frontpage.kendaraandetail') }}" class="btn btn-secondary py-2 ml-1">Details</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 taksi">
                                    <div class="car-wrap rounded ftco-animate">
                                        <div class="img rounded d-flex align-items-end"
                                            style="background-image: url('/assets/template_user/assets/img/kendaraan/car-8.jpg');">
                                        </div>
                                        <div class="text">
                                            <h2 class="mb-0"><a href="{{ route('frontpage.kendaraandetail') }}">Sedan</a></h2>
                                            <div class="d-flex mb-3">
                                                <span class="cat">Cheverolet</span>
                                                <p class="price ml-auto">$500 <span>/day</span></p>
                                            </div>
                                            <p class="d-flex mb-0 d-block"><a href="#"
                                                    class="btn btn-primary py-2 mr-1">Book now</a> <a
                                                    href="{{ route('frontpage.kendaraandetail') }}" class="btn btn-secondary py-2 ml-1">Details</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 taksi">
                                    <div class="car-wrap rounded ftco-animate">
                                        <div class="img rounded d-flex align-items-end"
                                            style="background-image: url('/assets/template_user/assets/img/kendaraan/car-9.jpg');">
                                        </div>
                                        <div class="text">
                                            <h2 class="mb-0"><a href="{{ route('frontpage.kendaraandetail') }}">Sedan</a></h2>
                                            <div class="d-flex mb-3">
                                                <span class="cat">Cheverolet</span>
                                                <p class="price ml-auto">$500 <span>/day</span></p>
                                            </div>
                                            <p class="d-flex mb-0 d-block">
                                                <a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                                                <a href="#" class="btn btn-secondary py-2 ml-1"
                                                    data-bs-toggle="modal" data-bs-target="#carDetailModal">Detail</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="carDetailModal" tabindex="-1"
                                aria-labelledby="carDetailModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="carDetailModalLabel">Detail Car</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                <center><img src="/assets/template_user/assets/img/kendaraan/car-1.jpg" width="350" alt="Car Image">
                                                </center>
                                            </p>
                                            <p><strong>Make: </strong>Cheverolet</p>
                                            <p><strong>Model: </strong>Sedan</p>
                                            <p><strong>Price: </strong>$500/day</p>
                                            <p><strong>Status: </strong><span class="badge bg-success">Available</span></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            {{-- <div class="modal fade" id="{{ $motor->plat_motor }}" tabindex="-1"
                                aria-labelledby="tesLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tesLabel">Detail Motor</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                <center><img src="{{ asset('storage/' . $motor->gambar_motor) }}"
                                                        width="350" alt=""></center>
                                            </p>
                                            <p><strong>Merek Motor : </strong>{{ $motor->nama_motor }}</p>
                                            <p><strong>CC : </strong>{{ $motor->cc }} cc</p>
                                            <p><strong>Warna : </strong>{{ $motor->warna }}</p>
                                            <p><strong>Tipe : </strong>{{ $motor->tipe }}</p>
                                            <p><strong>Tahun : </strong>{{ $motor->tahun }}</p>
                                            <p><strong>Harga Sewa : </strong>Rp.
                                                {{ number_format($motor->harga_sewa, 0, ',', '.') }}</p>
                                            <p><strong>Status : </strong>
                                                @if ($motor->status == 1)
                                                    <span class="badge bg-success">Tersedia</span>
                                                @else
                                                    <span class="badge bg-secondary">Disewakan</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

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
            </div>
        </div>
    </section>
@endsection
