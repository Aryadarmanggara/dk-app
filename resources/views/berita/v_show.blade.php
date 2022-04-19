@extends('admin.v_template')
@section('title', 'Detail Berita')

@section('content')
<a href="{{route('berita.edit', $berita->id)}}" class="btn btn-sm btn-warning text-white mb-3">Edit</a>
<a href="{{route('berita.index')}}" class="btn btn-sm btn-danger text-white mb-3">Kembali</a>
<div class="card mb-3">
  <img src="{{ Storage::url($berita->sampul) }}" height="450px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$berita->judul}}</h5>
    <p class="card-text">{!!$berita->konten!!}</p>
    <p class="card-text"><small class="text-muted">{{$berita->created_at->diffForHumans()}}</small></p>
  </div>
</div>


@endsection