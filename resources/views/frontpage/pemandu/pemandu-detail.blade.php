@extends('frontpage.general.layout')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('/assets/template_user/assets/img/pemandu/pemandu.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Detail Pemandu</h2>
            <ol>
                <li><a href="{{ route('frontpage.beranda') }}">Beranda</a></li>
                <li>Detail Pemandu</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->
@endsection
