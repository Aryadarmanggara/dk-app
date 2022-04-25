@extends('frontend.template')
@section('title', 'Pengumuman')

@section('content')
<main id="main">
  <section id="blog" class="blog mt-5 ">


    <div class="container  mt-5  mb-5" data-aos="fade-up">
      <div class="row g-5 ">

        <div class="col-lg-12 col-md-6 content d-flex flex-column justify-content-center text-center order-last order-md-first">
          <h3><em>Pengumuman</em> </h3>
          <div class="row gy-4 posts-list mt-3">
            @foreach($pengumuman as $data)
            <div class="col-sm-3">
              <article class="d-flex flex-column">

                <div class="post-img">
                  <img src="{{ Storage::url($data->sampul) }}" alt="" class="img-fluid" height="100px">
                </div>

                <h2 class="title">
                  <a href="{{route('detail_blog', $data->slug)}}">{{$data->judul}}</a>
                </h2>

                <div class="content">
                  <p>
                    {{ substr(strip_tags($data->konten), 0, 300) }}
                    {{ strlen(strip_tags($data->konten)) > 30 ? "..." : "" }}
                  </p>
                </div>

                <div class="read-more mt-auto align-self-end">
                  <a href="{{route('detail_pengumuman', $data->slug)}}">Read More</a>
                </div>

              </article>
            </div><!-- End post list item -->
            @endforeach
          </div>
        </div>


      </div>
    </div>

  </section>
</main>

@endsection