@extends('admin.v_template')
@section('title', 'Sejarah Desa')

@section('content')

<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Sejarah Desa</h5>
        <a href="{{route('sejarah.create')}}" class="btn btn-md btn-primary">Tambah Data Sejarah</a>
      </div>
      <div class="card-body">
        <p>Lorem, ipsum dolor.</p>
      </div>
      <div class="card-footer d-sm-flex justify-content-between">
        <div class="card-footer-link mb-4 mb-sm-0">
          <p class="card-text text-dark d-inline">Last updated 3 mins ago</p>
        </div>

        <a href="javascript:void()" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

@endsection