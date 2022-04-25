@extends('admin.v_template')
@section('title', 'Identitas Desa')

@section('content')

<div class="row">
  @if(session('success'))
  <p class="alert alert-success">{{ session('success') }}</p>
  @endif
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Identitas Desa</h4>
        <!-- <a href=" {{route('identitas.create')}} " class="btn btn-md btn-outline-primary">Tambah Data Identitas Desa</a> -->
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <tbody style="color: dimgray;">

              <tr>
                <th scope="col">Nama Desa</th>
                <td>{{$identitas->nama_desa}}</td>
              </tr>
              <tr>
                <th scope="col">Nama Kecamatan</th>
                <td>{{$identitas->nama_kecamatan}}</td>
              </tr>
              <tr>
                <th scope="col">Kabupaten</th>
                <td>{{$identitas->kabupaten}}</td>
              </tr>
              <tr>
                <th scope="col">Provinsi</th>
                <td>{{$identitas->provinsi}}</td>
              </tr>
              <tr>
                <th scope="col">Kode Pos</th>
                <td>{{$identitas->kode_pos}}</td>
              </tr>
              <tr>
                <th scope="col">Alamat</th>
                <td>{{$identitas->alamat}}</td>
              </tr>
              <tr>
                <th scope="col">Nama Kepala Desa</th>
                <td>{{$identitas->nama_kepala_desa}}</td>
              </tr>
              <tr>
                <th scope="col">Logo</th>
                <td><img src="{{ Storage::url($identitas->image) }}" alt="" width="100px"></td>
              </tr>
              <!-- <tr>
                <th scope="col">Instagram</th>
                <td>{{$identitas->instagram}}</td>
              </tr>
              <tr>
                <th scope="col">Facebook</th>
                <td>{{$identitas->facebook}}</td>
              </tr>
              <tr>
                <th scope="col">Twitter</th>
                <td>{{$identitas->twitter}}</td>
              </tr> -->
          </table>
        </div>
      </div>
    </div>
  </div>

  <a href="{{route('identitas.edit', $identitas->id)}}" class="btn btn-sm btn-warning text-white col-md-12">Edit</a>
  <!-- <form method="POST" action="{{ route('identitas.destroy', $identitas->id) }}" style="display: inline-block;" class="col-md-8">
    @csrf
    @method('DELETE')
    <button class="btn btn-sm btn-danger col-md-6" onclick="return confirm('Delete?')">Delete</button>
  </form> -->

  </tbody>
  </table>
</div>




@endsection