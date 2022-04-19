@extends('admin.v_template')
@section('title', 'Tambah Kategori Baru')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card text-white bg-secondary">
      <div class="card-header">
        <h5 class="card-title text-white">Tambah Kategori Baru</h5>
      </div>
      <div class="card-body mb-0">
        <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="nama">Nama Kategori</label>
            <input type="text" class="form-control input-default" id="nama" name="nama" value="{{ old('nama') }}">
          </div>
          @error('nama')
          <div class="alert alert-secondary text-danger">{{ $message }}</div>
          @enderror
          <div class="mb-3">
            <button class="btn btn-md btn-success text-white size-4" type="submit">Save</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-md btn-danger size-4">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection