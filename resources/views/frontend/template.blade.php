<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Desa Keramas | @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="{{asset('frontend')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('frontend')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{asset('frontend')}}/assets/css/variables.css" rel="stylesheet">
  <!-- <link href="{{asset('frontend')}}/assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="{{asset('frontend')}}/assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="{{asset('frontend')}}/assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="{{asset('frontend')}}/assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="{{asset('frontend')}}/assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="{{asset('frontend')}}/assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend')}}/assets/css/main.css" rel="stylesheet">

  <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicon')}}/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicon')}}/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon')}}/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicon')}}/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicon')}}/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon')}}/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicon')}}/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicon')}}/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon')}}/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="{{asset('favicon')}}/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon')}}/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon')}}/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon')}}/favicon-16x16.png">
  <link rel="manifest" href="{{asset('favicon')}}/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- =======================================================
  * Template Name: HeroBiz - v2.1.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    .foto-container {
      width: 30%;
      height: 150px;
      border-radius: 50%;
      background-color: red;
    }

    .foto-container img {
      max-height: 100%;
      width: 100%;
      border-radius: 50%;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontend.header')
  <!-- End Header -->
  @yield('content')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('frontend.footer')
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('frontend')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend')}}/assets/js/main.js"></script>

</body>

</html>