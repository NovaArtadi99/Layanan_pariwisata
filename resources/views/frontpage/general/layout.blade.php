<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $pageTitle }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/template_user/assets/img/logo-pariwisata.png" rel="icon">
    <link href="/assets/template_user/assets/img/logo-pariwisata.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/template_user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/template_user/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/template_user/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/template_user/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/template_user/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/assets/template_user/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="/assets/template_user/assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="page-index">

    <!-- ***** Preloader Start ***** -->
  {{-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> --}}
  <!-- ***** Preloader End ***** -->

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/template_user/assets/img/logo-pariwisata.png') }}" alt="">
                <h1 class="d-flex align-items-center">Sistem Layanan Pariwisata</h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <!-- .navbar -->
            @include('frontpage.general.navbar')
        </div>
    </header><!-- End Header -->

    <main id="main">
       @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontpage.general.footer')
    <!-- End Footer --><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- <div id="preloader"></div> --}}

    <!-- Vendor JS Files -->
    <script src="/assets/template_user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/template_user/assets/vendor/aos/aos.js"></script>
    <script src="/assets/template_user/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/template_user/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/template_user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/template_user/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/template_user/assets/js/main.js"></script>
    {{-- de car --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
