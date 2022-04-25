@extends('admin.v_template')
@section('title', 'Detail Potensi Desa')

@section('content')
<a href="{{route('pariwisata.edit', $pariwisata->id)}}" class="btn btn-sm btn-warning text-white mb-3">Edit</a>
<a href="{{route('pariwisata.index')}}" class="btn btn-sm btn-danger text-white mb-3">Kembali</a>
<div class="card mb-3">
  <img src="{{ Storage::url($pariwisata->sampul) }}" height="450px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$pariwisata->judul}}</h5>
    <p class="card-text">{!!$pariwisata->konten!!}</p>
    <p class="card-text"><small class="text-muted">{{$pariwisata->created_at->diffForHumans()}}</small></p>
  </div>
</div>


@endsection