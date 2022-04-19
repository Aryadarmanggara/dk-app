@extends('admin.v_template')
@section('title', 'Edit Data Ulasan Desa')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card text-white bg-secondary">
      <div class="card-header">
        <h5 class="card-title text-white">Edit Data Ulasan Desa</h5>
      </div>
      <div class="card-body mb-0">
        <form action="{{route('ulasan.update',['ulasan'=>$ulasan->id])}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="ulasan">Ulasan</label>
            <textarea id="ulasan" name="ulasan" class="form-control summernote" style="color: black !important;" rows="4" id="ulasan">{{ $ulasan->ulasan }}</textarea>
            @error('ulasan')
            <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <button class="btn btn-md btn-success text-white size-4" type="submit">Save</button>
            <a href="{{ route('ulasan.index') }}" class="btn btn-md btn-danger size-4">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection