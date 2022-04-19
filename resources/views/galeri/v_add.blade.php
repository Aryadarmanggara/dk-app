@extends('admin.v_template')
@section('title', 'Tambah Data Galeri Desa')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card text-white bg-secondary">
      <div class="card-header">
        <h5 class="card-title text-white">Tambah Data Galeri Desa</h5>
      </div>
      <div class="card-body mb-0">
        <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control input-default" id="judul" name="judul" value="{{ old('judul') }}">
          </div>
          <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input class="form-control" type="file" name="foto">
          </div>
          <div class="mb-3">
            <button class="btn btn-md btn-success text-white size-4" type="submit">Save</button>
            <a href="{{ route('galeri.index') }}" class="btn btn-md btn-danger size-4">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection