@extends('frontend.template')
@section('title', 'Detail Blog')

@section('content')



<main id="main">



  <section id="blog" class="blog ">
    <div class="container " data-aos="fade-up">

      <div class="row g-5 mt-5">

        <div class="col-lg-8">

          <article class="blog-details">

            <div class="post-img">
              <img src="{{ Storage::url($berita->sampul) }}" alt="" class="img-fluid">
            </div>

            <h2 class="title">{{$berita->judul}}</h2>

            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{$user->name}}</li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2020-01-01">{{$berita->created_at}}</time></li>

              </ul>
            </div><!-- End meta top -->

            <div class="content">
              {!!$berita->konten!!}

            </div><!-- End post content -->


          </article><!-- End blog post -->



        </div>

        <div class="col-lg-4">

          <div class="sidebar">

            <div class="sidebar-item search-form">
              <h3 class="sidebar-title">Search</h3>
              <form action="" class="mt-3">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div><!-- End sidebar search formn-->

            <div class="sidebar-item categories">
              <h3 class="sidebar-title">Categories</h3>
              <ul class="mt-3">
                @foreach($kategori as $item)
                <li><a href="#">{{$item->nama}} <span></span></a></li>
                @endforeach

              </ul>
            </div><!-- End sidebar categories-->

            <div class="sidebar-item recent-posts">
              <h3 class="sidebar-title">Recent Posts</h3>

              <div class="mt-3">

                <div class="post-item mt-3">
                  <img src="{{asset('frontend')}}/assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                  <div>
                    <h4><a href="blog-post.html">Nihil blanditiis at in nihil autem</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                  <img src="{{asset('frontend')}}/assets/img/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
                  <div>
                    <h4><a href="blog-post.html">Quidem autem et impedit</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                  <img src="{{asset('frontend')}}/assets/img/blog/blog-recent-3.jpg" alt="" class="flex-shrink-0">
                  <div>
                    <h4><a href="blog-post.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                  <img src="{{asset('frontend')}}/assets/img/blog/blog-recent-4.jpg" alt="" class="flex-shrink-0">
                  <div>
                    <h4><a href="blog-post.html">Laborum corporis quo dara net para</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
                </div><!-- End recent post item-->

                <div class="post-item">
                  <img src="{{asset('frontend')}}/assets/img/blog/blog-recent-5.jpg" alt="" class="flex-shrink-0">
                  <div>
                    <h4><a href="blog-post.html">Et dolores corrupti quae illo quod dolor</a></h4>
                    <time datetime="2020-01-01">Jan 1, 2020</time>
                  </div>
                </div><!-- End recent post item-->

              </div>

            </div><!-- End sidebar recent posts-->

          </div><!-- End Blog Sidebar -->

        </div>
      </div>

    </div>
  </section><!-- End Blog Details Section -->

</main><!-- End #main -->



</main>

@endsection