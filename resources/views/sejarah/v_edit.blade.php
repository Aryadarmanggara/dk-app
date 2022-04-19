@extends('admin.v_template')
@section('title', 'Edit Data Sejarah Desa')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card text-white bg-secondary">
      <div class="card-header">
        <h5 class="card-title text-white">Edit Data Sejarah Desa</h5>
      </div>
      <div class="card-body mb-0">
        <form action="{{route('sejarah.update',['sejarah'=>$sejarah->id])}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control input-default" id="judul" name="judul" value="{{ $sejarah->judul }}">
            @error('judul')
            <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="konten">Konten</label>
            <textarea id="konten" name="konten" class="form-control summernote" style="color: black !important;" rows="4" id="konten">{{ $sejarah->konten }}</textarea>
            @error('konten')
            <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <button class="btn btn-md btn-success text-white size-4" type="submit">Save</button>
            <a href="{{ route('sejarah.index') }}" class="btn btn-md btn-danger size-4">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection