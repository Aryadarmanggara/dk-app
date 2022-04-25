@extends('admin.v_template')
@section('title', 'Tambah Data Seni Budaya')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card text-white bg-secondary">
      <div class="card-header">
        <h5 class="card-title text-white">Tambah Data Seni Budaya</h5>
      </div>
      <div class="card-body mb-0">
        <form action="{{ route('senibudaya.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">

            <label for="judul">Judul</label>
            <input type="text" class="form-control input-default" id="judul" name="judul" value="{{ old('judul') }}">
            @error('judul')
            <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="sampul" class="form-label">Sampul</label>
            <input class="form-control" type="file" name="sampul" id="sampul">
            @error('sampul')
            <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="konten">Konten</label>
            <textarea id="konten" name="konten" class="form-control summernote" style="color: black !important;" rows="4" id="konten">{{ old('konten') }}</textarea>
            @error('konten')
            <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <button class="btn btn-md btn-success text-white size-4" type="submit">Save</button>
            <a href="{{ route('senibudaya.index') }}" class="btn btn-md btn-danger size-4">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection