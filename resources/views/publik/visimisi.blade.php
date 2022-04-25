@extends('frontend.template')
@section('title', 'Home')

@section('content')
<main id="main">
  <section id="cta" class="cta mt-5 ">


    <div class="container  mt-5  mb-5" data-aos="fade-up">
      <div class="row g-5 ">

        <div class="col-lg-12 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
          <h3><em>Visi</em></h3>
          <p> {!!$visimisi->visi!!}</p>
          <h3><em>Misi</em></h3>
          <p> {!!$visimisi->misi!!}</p>
        </div>


      </div>
    </div>
  </section>
</main>

@endsection