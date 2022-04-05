@extends('admin.v_template')
@section('title', 'Edit Data Identitas Desa')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="row">
  <div class="col-md-12">
    <div class="card text-white bg-secondary">
      <div class="card-header">
        <h5 class="card-title text-white">Tambah Data Identitas Desa</h5>
      </div>
      <div class="card-body mb-0">
        <form action="{{ route('identitas.update', $identitas->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="form-group">
            <label for="nama_desa">Nama Desa</label>
            <input type="text" class="form-control input-default" id="nama_desa" name="nama_desa" value="{{ $identitas->nama_desa }}">
          </div>
          <div class="form-group">
            <label for="nama_kecamatan">Nama Kecamatan</label>
            <input type="text" class="form-control input-default" id="nama_kecamatan" name="nama_kecamatan" value="{{ $identitas->nama_kecamatan }}">
          </div>
          <div class="form-group">
            <label for="kabupaten">Kabupaten</label>
            <input type="text" class="form-control input-default" id="kabupaten" name="kabupaten" value="{{ $identitas->kabupaten }}">
          </div>
          <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <input type="text" class="form-control input-default" id="provinsi" name="provinsi" value="{{ $identitas->provinsi }}">
          </div>
          <div class="form-group">
            <label for="kode_pos">Kode Pos</label>
            <input type="text" class="form-control input-default" id="kode_pos" name="kode_pos" value="{{ $identitas->kode_pos }}">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control input-default" id="alamat" name="alamat" value="{{ $identitas->alamat }}">
          </div>
          <div class="form-group">
            <label for="nama_kepala_desa">Email</label>
            <input type="text" class="form-control input-default" id="nama_kepala_desa" name="nama_kepala_desa" value="{{ $identitas->nama_kepala_desa }}">
          </div>
          <div class="form-group mb-5">
            <label for="image" class="form-label">Foto</label>
            <input type="file" class="form-control" id="image" name="image">
            <img src="{{ Storage::url($identitas->image) }}" width="200px" class="mt-2">
          </div>
          <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control input-default" id="instagram" name="instagram" value="{{ $identitas->instagram }}">
          </div>
          <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" class="form-control input-default" id="facebook" name="facebook" value="{{ $identitas->facebook }}">
          </div>
          <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="text" class="form-control input-default" id="twitter" name="twitter" value="{{ $identitas->twitter }}">
          </div>
          <div class="mb-3">
            <button class="btn btn-md btn-success text-white size-4" type="submit">Save</button>
            <a href="{{ route('identitas.index') }}" class="btn btn-md btn-danger size-4">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection