@extends('admin.v_template')
@section('title', 'Visi Misi')

@section('content')

<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Visi Misi</h5>
        <a href="{{route('visimisi.create')}}" class="btn btn-md btn-primary">Tambah Data Visi Misi</a>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <h3 class="text-center">Visi</h3>
          <p>{!!$visimisi->visi!!}</p>
        </div>

        <div class="mb-3">
          <h3 class="text-center">Misi</h3>
          <p>{!!$visimisi->misi!!}</p>
        </div>
      </div>
      <div class="card-footer d-sm-flex justify-content-between">
        <div class="card-footer-link mb-4 mb-sm-0">
          <p class="card-text text-dark d-inline">{{$visimisi->updated_at->diffForHumans()}}</p>
        </div>

        <a href="{{route('visimisi.edit', $visimisi->id)}}" class="btn btn-warning text-white">Edit Data</a>
      </div>
    </div>
  </div>
</div>

@endsection