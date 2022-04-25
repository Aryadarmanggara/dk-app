@extends('frontend.template')
@section('title', 'PKK')

@section('content')



<main id="main">

  <section id="team" class="team mt-5">
    <div class=" container mt-5 " data-aos=" fade-up">

      <div class="section-header">
        <h2><em>PKK</em></h2>
      </div>

      <div class="row gy-5">
        @foreach($pkk as $data)
        <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
          <div class="team-member">
            <div class="member-img">
              <img src="{{Storage::url($data->image)}}" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>{{$data->nama}}</h4>
              <span>{{$data->jabatan}}</span>
              <!-- <a href="{{route('perangkat-desa.show', $data->id)}}" class="btn btn-sm btn-info text-white">Detail Profile</a> -->
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-info btn-sm text-white mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$data->id}}">
                Detail Profile
              </button>
            </div>
          </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal-{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Profil: {{$data->nama}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <div class="m-auto foto-container">
                  <img src=" {{Storage::url($data->image)}}" alt="">
                </div>
                <hr>
                <table class="m-auto">
                  <tr>
                    <td><strong>Nama: </strong></td>
                    <td> &nbsp; &nbsp;{{$data->nama}}</td>
                  </tr>
                  <tr>
                    <td><strong>Jabatan: </strong></td>
                    <td> &nbsp; &nbsp;{{$data->jabatan}}</td>
                  </tr>
                  <tr>
                    <td><strong>No Hp: </strong></td>
                    <td> &nbsp; &nbsp;{{$data->nohp}}</td>
                  </tr>
                  <tr>
                    <td><strong>Email: </strong></td>
                    <td> &nbsp; &nbsp;{{$data->email}}</td>
                  </tr>
                  <tr>
                    <td><strong>Alamat: </strong></td>
                    <td> &nbsp; &nbsp;{{$data->alamat}}</td>
                  </tr>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>



        @endforeach

        <!-- End Team Member -->


      </div>

    </div>
  </section>

</main><!-- End #main -->





@endsection