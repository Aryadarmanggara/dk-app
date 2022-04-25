@extends('admin.v_template')
@section('title', 'Detail Potensi Desa')

@section('content')
<a href="{{route('kerajinan.edit', $kerajinan->id)}}" class="btn btn-sm btn-warning text-white mb-3">Edit</a>
<a href="{{route('kerajinan.index')}}" class="btn btn-sm btn-danger text-white mb-3">Kembali</a>
<div class="card mb-3">
  <img src="{{ Storage::url($kerajinan->sampul) }}" height="450px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$kerajinan->judul}}</h5>
    <p class="card-text">{!!$kerajinan->konten!!}</p>
    <p class="card-text"><small class="text-muted">{{$kerajinan->created_at->diffForHumans()}}</small></p>
  </div>
</div>


@endsection