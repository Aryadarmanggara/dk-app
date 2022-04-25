<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Desa Keramas | @yield('title')</title>
  <!-- Favicon icon -->
  <!-- <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend')}}/images/favicon.png"> -->
  <link rel="stylesheet" href="{{asset('backend')}}/vendor/owl-carousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{asset('backend')}}/vendor/owl-carousel/css/owl.theme.default.min.css">
  <link href="{{asset('backend')}}/vendor/summernote/summernote.css" rel="stylesheet">
  <link href="{{asset('backend')}}/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
  <link href="{{asset('backend')}}/css/style.css" rel="stylesheet">

  </script>>
  <!-- favicon -->

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
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

    .montserrat {
      font-family: montserrat;
      color: black;
    }
  </style>

</head>

<body>

  <!--*******************
        Preloader start
    ********************-->
  <div id="preloader">
    <div class="sk-three-bounce">
      <div class="sk-child sk-bounce1"></div>
      <div class="sk-child sk-bounce2"></div>
      <div class="sk-child sk-bounce3"></div>
    </div>
  </div>
  <!--*******************
        Preloader end
    ********************-->


  <!--**********************************
        Main wrapper start
    ***********************************-->
  <div id="main-wrapper">

    <!--**********************************
            Nav header start
        ***********************************-->
    <div class="nav-header bg-white">
      <a href="index.html" class="brand-logo">
        <img class="logo-abbr" src="{{asset('backend')}}/images/logoo.png" alt="">
        <h3 class="montserrat ml-2 mt-2">Desa Keramas</h3>
      </a>

      <!-- <div class="nav-control">
        <div class="hamburger">
          <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
      </div> -->
    </div>
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Header start
        ***********************************-->
    <div class="header">
      <div class="header-content">
        <nav class="navbar navbar-expand">
          <div class="collapse navbar-collapse justify-content-between">
            <div class="header-left">
              <!-- <div class="search_bar dropdown">
                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                  <i class="mdi mdi-magnify"></i>
                </span>
                <div class="dropdown-menu p-0 m-0">
                  <form>
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                  </form>
                </div>
              </div> -->
            </div>

            <ul class="navbar-nav header-right">
              <!-- <li class="nav-item dropdown notification_dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <div class="pulse-css"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <ul class="list-unstyled">
                    <li class="media dropdown-item">
                      <span class="success"><i class="ti-user"></i></span>
                      <div class="media-body">
                        <a href="#">
                          <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                          </p>
                        </a>
                      </div>
                      <span class="notify-time">3:20 am</span>
                    </li>
                    <li class="media dropdown-item">
                      <span class="primary"><i class="ti-shopping-cart"></i></span>
                      <div class="media-body">
                        <a href="#">
                          <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                        </a>
                      </div>
                      <span class="notify-time">3:20 am</span>
                    </li>
                    <li class="media dropdown-item">
                      <span class="danger"><i class="ti-bookmark"></i></span>
                      <div class="media-body">
                        <a href="#">
                          <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                          </p>
                        </a>
                      </div>
                      <span class="notify-time">3:20 am</span>
                    </li>
                    <li class="media dropdown-item">
                      <span class="primary"><i class="ti-heart"></i></span>
                      <div class="media-body">
                        <a href="#">
                          <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                        </a>
                      </div>
                      <span class="notify-time">3:20 am</span>
                    </li>
                    <li class="media dropdown-item">
                      <span class="success"><i class="ti-image"></i></span>
                      <div class="media-body">
                        <a href="#">
                          <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                          </p>
                        </a>
                      </div>
                      <span class="notify-time">3:20 am</span>
                    </li>
                  </ul>
                  <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                </div>
              </li> -->
              <li class="nav-item dropdown header-profile">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                  <i class="mdi mdi-account"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                    <i class="icon-user"></i>
                    <span class="ml-2">Profile </span>
                  </a>


                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-key"></i>
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>


                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->
    @include('admin.v_sidebar')
    <!--**********************************
            Sidebar end
        ***********************************-->

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
      <!-- row -->
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
            Footer start
        ***********************************-->
    @include('admin.v_footer')
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


  </div>
  <!--**********************************
        Main wrapper end
    ***********************************-->

  <!--**********************************
        Scripts
    ***********************************-->
  <!-- Required vendors -->
  <script src="{{asset('backend')}}/vendor/global/global.min.js"></script>
  <script src="{{asset('backend')}}/js/quixnav-init.js"></script>
  <script src="{{asset('backend')}}/js/custom.min.js"></script>


  <!-- Vectormap -->
  <script src="{{asset('backend')}}/vendor/raphael/raphael.min.js"></script>
  <script src="{{asset('backend')}}/vendor/morris/morris.min.js"></script>


  <script src="{{asset('backend')}}/vendor/circle-progress/circle-progress.min.js"></script>
  <script src="{{asset('backend')}}/vendor/chart.js/Chart.bundle.min.js"></script>

  <script src="{{asset('backend')}}/vendor/gaugeJS/dist/gauge.min.js"></script>

  <!--  flot-chart js -->
  <script src="{{asset('backend')}}/vendor/flot/jquery.flot.js"></script>
  <script src="{{asset('backend')}}/vendor/flot/jquery.flot.resize.js"></script>

  <!-- Owl Carousel -->
  <script src="{{asset('backend')}}/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <!-- Counter Up -->
  <script src="{{asset('backend')}}/vendor/jqvmap/js/jquery.vmap.min.js"></script>
  <script src="{{asset('backend')}}/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
  <script src="{{asset('backend')}}/vendor/jquery.counterup/jquery.counterup.min.js"></script>


  <script src="{{asset('backend')}}/js/dashboard/dashboard-1.js"></script>

  <script src="https://kit.fontawesome.com/199893f26a.js" crossorigin="anonymous"></script>
  <!-- Summernote -->
  <script src="{{asset('backend')}}/vendor/summernote/js/summernote.min.js"></script>
  <!-- Summernote init -->
  <script src="{{asset('backend')}}/js/plugins-init/summernote-init.js"></script>
  @yield('ckeditor5')


</body>

</html>