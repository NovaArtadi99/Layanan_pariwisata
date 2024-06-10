@extends('frontpage.general.layout')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('/assets/template_user/assets/img/paketlayanan/paket.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Paket Layanan</h2>
            <ol>
                <li><a href="{{ route('frontpage.beranda') }}">Beranda</a></li>
                <li>Paket Layanan</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->
    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="car-list">
                    <table class="table">
                        <thead class="thead-primary">
                          <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th class="bg-primary heading">Tarif Per Hari</th>
                            <th class="bg-dark heading">Tarif Per Minggu</th>
                            <th class="bg-black heading">Bulanan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="">
                              <td class="car-image"><div class="img" style="background-image:url('/assets/template_user/assets/img/beranda/lempuyang.jpeg');"></div></td>
                            <td class="product-name">
                                <h3>Paket 1</h3>
                                <p class="mb-0 rated">
                                    <span>rating:</span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </p>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 10.99</span>
                                        <span class="per">/per hari</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 60.99</span>
                                        <span class="per">/per minggu</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 995.99</span>
                                        <span class="per">/per bulan</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>
                          </tr><!-- END TR-->

                          <tr class="">
                              <td class="car-image"><div class="img" style="background-image:url('/assets/template_user/assets/img/kendaraan/car-9.jpg');"></div></td>
                            <td class="product-name">
                                <h3>Paket 2</h3>
                                <p class="mb-0 rated">
                                    <span>rating:</span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </p>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 10.99</span>
                                        <span class="per">/per hari</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 60.99</span>
                                        <span class="per">/per minggu</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 995.99</span>
                                        <span class="per">/per bulan</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>
                          </tr><!-- END TR-->

                          <tr class="">
                              <td class="car-image"><div class="img" style="background-image:url(/assets/template_user/assets/img/beranda/ubud.jpeg);"></div></td>
                            <td class="product-name">
                                <h3>Paket 3</h3>
                                <p class="mb-0 rated">
                                    <span>rating:</span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </p>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 10.99</span>
                                        <span class="per">/per hari</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 60.99</span>
                                        <span class="per">/per minggu</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 995.99</span>
                                        <span class="per">/per bulan</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>
                          </tr><!-- END TR-->

                          <tr class="">
                              <td class="car-image"><div class="img" style="background-image:url('/assets/template_user/assets/img/penginapan/property-01.jpg');"></div></td>
                            <td class="product-name">
                                <h3>Paket 4</h3>
                                <p class="mb-0 rated">
                                    <span>rating:</span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </p>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 10.99</span>
                                        <span class="per">/per hari</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 60.99</span>
                                        <span class="per">/per minggu</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 995.99</span>
                                        <span class="per">/per bulan</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>
                          </tr><!-- END TR-->


                          <tr class="">
                              <td class="car-image"><div class="img" style="background-image:url('/assets/template_user/assets/img/penginapan/property-02.jpg');"></div></td>
                            <td class="product-name">
                                <h3>Paket 5</h3>
                                <p class="mb-0 rated">
                                    <span>rating:</span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </p>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 10.99</span>
                                        <span class="per">/per hari</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 60.99</span>
                                        <span class="per">/per minggu</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 995.99</span>
                                        <span class="per">/per bulan</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>
                          </tr><!-- END TR-->


                          <tr class="">
                              <td class="car-image"><div class="img" style="background-image:url('/assets/template_user/assets/img/kendaraan/car-11.jpg');"></div></td>
                            <td class="product-name">
                                <h3>Paket 6</h3>
                                <p class="mb-0 rated">
                                    <span>rating:</span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </p>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 10.99</span>
                                        <span class="per">/per hari</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 60.99</span>
                                        <span class="per">/per minggu</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>

                            <td class="price">
                                <p class="btn-custom"><a href="#">Pesan Sekarang</a></p>
                                <div class="price-rate">
                                    <h3>
                                        <span class="num"><small class="currency">$</small> 995.99</span>
                                        <span class="per">/per bulan</span>
                                    </h3>
                                    <span class="subheading">$3/hour fuel surcharges</span>
                                </div>
                            </td>
                          </tr><!-- END TR-->
                        </tbody>
                      </table>
                  </div>
            </div>
        </div>
        </div>
    </section>
@endsection
