@extends('frontend.template')
@section('title', 'Identitas Desa')

@section('content')
<main id="main">
<section id="cta" class="cta mt-5 mb-5">
      <div class="container mt-5" data-aos="fade-up">

        <div class="row g-0">
          <div class="col-lg-6 position-relative">
            <img src="{{ Storage::url($identitas->image) }}" class="glightbox" width="90%" height="100%" ></img>
          </div>
          <div class="col-lg-6">
            <div class="content d-flex flex-column justify-content-center h-100 ml-2">
              <h3><em><i>Identitas Desa</i></em></h3>
              <table class="table-borderless">
                <tr>
                  <td><strong>Nama Desa: </strong></td>
                  <td>{{$identitas->nama_desa}}</td>
                </tr>
                <tr>
                  <td><strong>Nama Kecamatan: </strong></td>
                  <td>{{$identitas->nama_kecamatan}}</td>
                </tr>
                <tr>
                  <td><strong>Kabupaten: </strong></td>
                  <td>{{$identitas->kabupaten}}</td>
                </tr>  <tr>
                  <td><strong>Provinsi: </strong></td>
                  <td>{{$identitas->provinsi}}</td>
                </tr>
                <tr>
                  <td><strong>Kode Pos: </strong></td>
                  <td>{{$identitas->kode_pos}}</td>
                </tr>
                <tr>
                  <td><strong>Alamat: </strong></td>
                  <td>{{$identitas->alamat}}</td>
                </tr>
                <tr>
                  <td><strong>Nama Kepala Desa: </strong></td>
                  <td>{{$identitas->nama_kepala_desa}}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>

      </div>
    </section>
</main>

@endsection