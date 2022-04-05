@extends('admin.v_template')
@section('title', 'Tambah Data Identitas Desa')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card text-white bg-secondary">
      <div class="card-header">
        <h5 class="card-title text-white">Tambah Data Identitas Desa</h5>
      </div>
      <div class="card-body mb-0">
        <form action="{{ route('identitas.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="nama_desa">Nama</label>
            <input type="text" class="form-control input-default" id="nama_desa" name="nama_desa" value="{{ old('nama_desa') }}">
          </div>
          <div class="form-group">
            <label for="nama_kecamatan">Nama Kecamatan</label>
            <input type="text" class="form-control input-default" id="nama_kecamatan" name="nama_kecamatan" value="{{ old('nama_kecamatan') }}">
          </div>
          <div class="form-group">
            <label for="kabupaten">Kabupaten</label>
            <input type="text" class="form-control input-default" id="kabupaten" name="kabupaten" value="{{ old('kabupaten') }}">
          </div>
          <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <input type="text" class="form-control input-default" id="provinsi" name="provinsi" value="{{ old('provinsi') }}">
          </div>
          <div class="form-group">
            <label for="kode_pos">Kode Pos</label>
            <input type="text" class="form-control input-default" id="kode_pos" name="kode_pos" value="{{ old('kode_pos') }}">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control input-default" id="alamat" name="alamat" value="{{ old('alamat') }}">
          </div>
          <div class="form-group">
            <label for="nama_kepala_desa">Nama Kepala Desa</label>
            <input type="text" class="form-control input-default" id="nama_kepala_desa" name="nama_kepala_desa" value="{{ old('nama_kepala_desa') }}">
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Logo</label>
            <input class="form-control" type="file" name="image">
          </div>
          <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control input-default" id="instagram" name="instagram" value="{{ old('instagram') }}">
          </div>
          <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" class="form-control input-default" id="facebook" name="facebook" value="{{ old('facebook') }}">
          </div>
          <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="text" class="form-control input-default" id="twitter" name="twitter" value="{{ old('twitter') }}">
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