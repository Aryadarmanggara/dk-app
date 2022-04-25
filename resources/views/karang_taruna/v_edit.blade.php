@extends('admin.v_template')
@section('title', 'Edit Data Karang Taruna')

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
        <h5 class="card-title text-white">Tambah Data Karang Taruna</h5>
      </div>
      <div class="card-body mb-0">
        <form action="{{ route('karang_taruna.update', $karangtaruna->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control input-default" id="nama" name="nama" value="{{ $karangtaruna->nama }}">
          </div>
          <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control input-default" id="jabatan" name="jabatan" value="{{ $karangtaruna->jabatan }}">
          </div>
          <div class="form-group">
            <label for="nohp">No HP</label>
            <input type="text" class="form-control input-default" id="nohp" name="nohp" value="{{ $karangtaruna->nohp }}">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control input-default" id="email" name="email" value="{{ $karangtaruna->email }}">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control input-default" id="alamat" name="alamat" value="{{ $karangtaruna->alamat }}">
          </div>
          <div class="form-group mb-5">
            <label for="image" class="form-label">Foto</label>
            <input type="file" class="form-control" id="image" name="image">
            <img src="{{ Storage::url($karangtaruna->image) }}" width="200px" class="mt-2">
          </div>
          <div class="mb-3">
            <button class="btn btn-md btn-success text-white size-4" type="submit">Save</button>
            <a href="{{ route('karang_taruna.index') }}" class="btn btn-md btn-danger size-4">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection