<header id="header" class="header fixed-top" data-scrollto-offset="0">
  <div class="container-fluid d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
      <img src="{{asset('backend')}}/images/logoo.png" class="img-fluid" alt="" height="300px">

    </a>


    <nav id="navbar" class="navbar mb-3 ">
      <ul>

        <li>
          <a class="nav-link " href="{{route('index.home')}}">Home</a>
        </li>
        <li class="dropdown"><a href="#"><span>Profil Desa</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="{{route('sejarah_desa')}}">Sejarah Desa</a></li>
            <li><a href="{{route('identitas_desa')}}">Identitas Desa</a></li>
            <!-- <li><a href="#">Geografis Desa</a></li> -->
            <!-- <li class="dropdown"><a href="#"><span>Banjar</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li> -->
            <li><a href="{{url('pvisimisi')}}">Visi Misi</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Pemerintahan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="{{url('perangkat-desa')}}">Perangkat Desa</a></li>
            <li><a href="{{url('publik_pkk')}}">PKK</a></li>
            <!-- <li><a href="{{url('publik_bumdesa')}}">BUMDesa</a></li> -->
            <li><a href="{{url('publik_linmas')}}">Linmas</a></li>
            <li><a href="{{url('publik_karang_taruna')}}">Karang Taruna</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Artikel</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="{{url('publik_pengumuman')}}">Pengumuman</a></li>
            <li><a href="{{url('publik_berita')}}">Berita</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Potensi Desa</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="{{url('publik_pariwisata')}}">Pariwisata</a></li>
            <li><a href="{{url('publik_alam')}}">Alam</a></li>
            <li><a href="{{url('publik_senibudaya')}}">Seni Budaya</a></li>
            <li><a href="{{url('publik_kuliner')}}">Kuliner</a></li>
            <li><a href="{{url('publik_perkebunan')}}">Perkebunan</a></li>
            <li><a href="{{url('publik_perikanan')}}">Perikanan</a></li>
            <li><a href="{{url('publik_kerajinan')}}">Kerajinan</a></li>
            <li><a href="{{url('publik_usahamikro')}}">Usaha Mikro</a></li>
          </ul>
        </li>
        <li><a class="nav-link" href="#">Produk Hukum</a></li>
        <li><a class="nav-link" href="#">APBDesa</a></li>
        <li><a class="nav-link" href="#">Pengaduan Masyarakat</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle d-none"></i>
    </nav><!-- .navbar -->
  </div>
</header>