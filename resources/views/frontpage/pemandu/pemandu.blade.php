@extends('frontpage.general.layout')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('/assets/template_user/assets/img/pemandu/pemandu.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Pemandu</h2>
            <ol>
                <li><a href="{{ route('frontpage.beranda') }}">Beranda</a></li>
                <li>Pemandu</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- Guide  -->
    <section class="guide py-5" id="guide">
        <div class="container py-md-5" data-aos="fade-up">
            <div class="section-header">
                <h2>Pemandu Kami</h2>
            </div>
            <div class="row">
                <div class="guide-grid col-lg-3 col-sm-6 mb-5">
                    <img src="/assets/template_user/assets/img/pemandu/t1.jpg" class="" style="width: 260px; height: 300px;" alt="" />
                    <div class="guide-info text-center">
                        <h3 class="e">Nova Amery</h3>
                        <span class="">Manager</span>
                    </div>
                </div>
                <div class="guide-grid col-lg-3 col-sm-6  mb-5">
                    <img src="/assets/template_user/assets/img/pemandu/t2.jpg" class="" style="width: 260px; height: 300px;" alt="" />
                    <div class="guide-info text-center">
                        <h3 class="">Ayu Melnik</h3>
                        <span class="">Pemandu 1</span>
                    </div>
                </div>
                <div class="guide-grid col-lg-3 col-sm-6  mb-5">
                    <img src="/assets/template_user/assets/img/pemandu/t3.jpg" class="" style="width: 260px; height: 300px;" alt="" />
                    <div class="guide-info text-center">
                        <h3 class="">Lise Mustika</h3>
                        <span class="">Pemandu 2</span>
                    </div>
                </div>
                <div class="guide-grid col-lg-3 col-sm-6  mb-5">
                    <img src="/assets/template_user/assets/img/pemandu/t4.jpg" class="" style="width: 260px; height: 300px;" alt="" />
                    <div class="guide-info text-center">
                        <h3 class="">Merta Eleanora</h3>
                        <span class="">Pemandu 3</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Guide -->
@endsection
