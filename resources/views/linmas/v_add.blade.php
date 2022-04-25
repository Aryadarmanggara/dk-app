@extends('admin.v_template')
@section('title', 'Tambah Data Linmas')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card text-white bg-secondary">
      <div class="card-header">
        <h5 class="card-title text-white">Tambah Data Linmas</h5>
      </div>
      <div class="card-body mb-0">
        <form action="{{ route('linmas.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control input-default" id="nama" name="nama" value="{{ old('nama') }}">
          </div>
          <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control input-default" id="jabatan" name="jabatan" value="{{ old('jabatan') }}">
          </div>
          <div class="form-group">
            <label for="nohp">No HP</label>
            <input type="text" class="form-control input-default" id="nohp" name="nohp" value="{{ old('nohp') }}">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control input-default" id="email" name="email" value="{{ old('email') }}">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control input-default" id="alamat" name="alamat" value="{{ old('alamat') }}">
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Foto</label>
            <input class="form-control" type="file" name="image">
          </div>
          <div class="mb-3">
            <button class="btn btn-md btn-success text-white size-4" type="submit">Save</button>
            <a href="{{ route('linmas.index') }}" class="btn btn-md btn-danger size-4">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection