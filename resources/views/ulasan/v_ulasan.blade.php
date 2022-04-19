@extends('admin.v_template')
@section('title', 'Ulasan Singkat Desa')

@section('content')

<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Ulasan Singkat Desa</h5>
        <a href="{{route('ulasan.create')}}" class="btn btn-md btn-primary">Tambah Ulasan Baru</a>
      </div>
      <div class="card-body">
        <div>{!!$ulasan->ulasan!!}</div>
      </div>
      <div class="card-footer d-sm-flex justify-content-between">
        <div class="card-footer-link mb-4 mb-sm-0">
          <p class="card-text text-dark d-inline">{{$ulasan->updated_at->diffForHumans()}}</p>
        </div>

        <a href="{{route('ulasan.edit', $ulasan->id)}}" class="btn btn-warning text-white">Edit Data</a>
      </div>
    </div>
  </div>
</div>

@endsection