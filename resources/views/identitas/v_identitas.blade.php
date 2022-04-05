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
        <a href=" {{route('identitas.create')}} " class="btn btn-md btn-outline-primary">Tambah Data Identitas Desa</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <tbody style="color: dimgray;">
              @foreach($identitas as $data)
              <tr>
                <th scope="col">Nama Desa</th>
                <td>{{$data->nama_desa}}</td>
              </tr>
              <tr>
                <th scope="col">Nama Kecamatan</th>
                <td>{{$data->nama_kecamatan}}</td>
              </tr>
              <tr>
                <th scope="col">Kabupaten</th>
                <td>{{$data->kabupaten}}</td>
              </tr>
              <tr>
                <th scope="col">Provinsi</th>
                <td>{{$data->provinsi}}</td>
              </tr>
              <tr>
                <th scope="col">Kode Pos</th>
                <td>{{$data->kode_pos}}</td>
              </tr>
              <tr>
                <th scope="col">Alamat</th>
                <td>{{$data->alamat}}</td>
              </tr>
              <tr>
                <th scope="col">Nama Kepala Desa</th>
                <td>{{$data->nama_kepala_desa}}</td>
              </tr>
              <tr>
                <th scope="col">Logo</th>
                <td><img src="{{ Storage::url($data->image) }}" alt="" width="100px"></td>
              </tr>
              <tr>
                <th scope="col">Instagram</th>
                <td>{{$data->instagram}}</td>
              </tr>
              <tr>
                <th scope="col">Facebook</th>
                <td>{{$data->facebook}}</td>
              </tr>
              <tr>
                <th scope="col">Twitter</th>
                <td>{{$data->twitter}}</td>
              </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

  <a href="{{route('identitas.edit', $data->id)}}" class="btn btn-sm btn-warning text-white col-md-4">Edit</a>
  <form method="POST" action="{{ route('identitas.destroy', $data->id) }}" style="display: inline-block;" class="col-md-8">
    @csrf
    @method('DELETE')
    <button class="btn btn-sm btn-danger col-md-6" onclick="return confirm('Delete?')">Delete</button>
  </form>
  @endforeach
  </tbody>
  </table>
</div>




@endsection