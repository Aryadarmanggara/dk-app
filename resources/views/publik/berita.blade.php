@extends('frontend.template')
@section('title', 'Berita')

@section('content')



<main id="main">

  <section id="blog" class="blog mt-5">
    <div class=" container mt-5 " data-aos=" fade-up">
      <div class="row g-5">

        <div class="col-lg-8">

          <div class="row gy-4 posts-list">
            @foreach($beritas as $data)
            <div class="col-lg-6">
              <article class="d-flex flex-column">

                <div class="post-img">
                  <img src="{{ Storage::url($data->sampul) }}" alt="" class="img-fluid">
                </div>

                <h2 class="title">
                  <a href="{{route('detail_blog', $data->slug)}}">{{$data->judul}}</a>
                </h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{$user->name}}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">{{$data->created_at}}</time></a></li>
                  </ul>
                </div>

                <div class="content">
                  <p>
                    {{ substr(strip_tags($data->konten), 0, 300) }}
                    {{ strlen(strip_tags($data->konten)) > 30 ? "..." : "" }}
                  </p>
                </div>

                <div class="read-more mt-auto align-self-end">
                  <a href="{{route('detail_blog', $data->slug)}}">Read More</a>
                </div>

              </article>
            </div><!-- End post list item -->
            @endforeach
          </div><!-- End blog posts list -->

          <!-- <div class="blog-pagination">
            <ul class="justify-content-center">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </div>< -->

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
                @foreach($kategori as $data)
                <li><a href="#">{{$data->nama}}</a></li>
                @endforeach
              </ul>
            </div><!-- End sidebar categories-->

            <div class="sidebar-item recent-posts">
              <h3 class="sidebar-title">Recent Posts</h3>

              <div class="mt-3">

                @foreach($berita as $data)
                <div class="post-item mt-3">
                  <img src="{{ Storage::url($data->sampul) }}" alt="" class="flex-shrink-0">
                  <div>
                    <h4><a href="blog-post.html">{{$data->judul}}</a></h4>
                    <time datetime="2020-01-01">{{$data->created_at}}</time>
                  </div>
                </div>
                @endforeach
                <!-- End recent post item-->

              </div>

            </div><!-- End sidebar recent posts-->

          </div><!-- End Blog Sidebar -->

        </div>

      </div>

    </div>
  </section>
</main>


@endsection