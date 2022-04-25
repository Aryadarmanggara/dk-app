@extends('frontend.template')
@section('title', 'Detail Pengumuman')

@section('content')



<main id="main">



  <section id="blog" class="blog ">
    <div class="container " data-aos="fade-up">

      <div class="row g-5 mt-5">

        <div class="col-lg-12">

          <article class="blog-details">

            <div class="post-img text-center">
              <img src="{{ Storage::url($pengumuman->sampul) }}" alt="" class="img-fluid">
            </div>

            <h2 class="title">{{$pengumuman->judul}}</h2>

            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2020-01-01">{{$pengumuman->created_at}}</time></li>

              </ul>
            </div><!-- End meta top -->

            <div class="content">
              {!!$pengumuman->konten!!}
            </div><!-- End post content -->
          </article><!-- End blog post -->
        </div>
      </div>
    </div>
  </section><!-- End Pengumuman Details Section -->

</main><!-- End #main -->



</main>

@endsection