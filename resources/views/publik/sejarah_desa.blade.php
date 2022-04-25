@extends('frontend.template')
@section('title', 'Home')

@section('content')
<main id="main">
  <section id="cta" class="cta mt-5 ">


    <div class="container  mt-5  mb-5" data-aos="fade-up">
      <div class="row g-5 ">

        <div class="col-lg-12 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
          <h3><em>{{$sejarah->judul}}</em> </h3>
          <p> {!!$sejarah->konten!!}</p>
        </div>


      </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31560.886356968364!2d115.3090203423245!3d-8.585345170132648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd215b460c4f7cb%3A0x5030bfbca830f00!2sKeramas%2C%20Kec.%20Blahbatuh%2C%20Kabupaten%20Gianyar%2C%20Bali!5e0!3m2!1sid!2sid!4v1650388422796!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
</main>

@endsection