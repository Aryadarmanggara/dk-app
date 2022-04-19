@extends('admin.v_template')
@section('title', 'Input Data Visi Misi Desa')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card text-white bg-secondary">
      <div class="card-header">
        <h5 class="card-title text-white">Input Data Visi Misi Desa</h5>
      </div>
      <div class="card-body mb-0">
        <form action="{{ route('visimisi.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="visi">Visi</label>
            <textarea id="visi" name="visi" class="form-control summernote" style="color: black !important;" rows="4" id="visi">{{ old('visi') }}</textarea>
            @error('visi')
            <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="misi">Misi</label>
            <textarea id="misi" name="misi" class="form-control summernote" style="color: black !important;" rows="4" id="misi">{{ old('misi') }}</textarea>
            @error('misi')
            <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <button class="btn btn-md btn-success text-white size-4" type="submit">Save</button>
            <a href="{{ route('visimisi.index') }}" class="btn btn-md btn-danger size-4">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection