@extends('admin.v_template')
@section('title', 'Sejarah Desa')

@section('content')

<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Sejarah Desa</h5>
        <!-- <a href="{{route('sejarah.create')}}" class="btn btn-md btn-primary">Tambah Data Sejarah</a> -->
      </div>
      <div class="card-body">
        <div class="text-center">
          <h3>{{$sejarah->judul}}</h3>
        </div>

        <div>{!!$sejarah->konten!!}</div>
      </div>
      <div class="card-footer d-sm-flex justify-content-between">
        <div class="card-footer-link mb-4 mb-sm-0">
          <p class="card-text text-dark d-inline">{{$sejarah->updated_at->diffForHumans()}}</p>
        </div>

        <a href="{{route('sejarah.edit', $sejarah->id)}}" class="btn btn-warning text-white">Edit Data</a>
      </div>
    </div>
  </div>
</div>

@endsection