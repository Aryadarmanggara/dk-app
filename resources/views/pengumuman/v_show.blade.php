@extends('admin.v_template')
@section('title', 'Detail Pengumuman')

@section('content')
<a href="{{route('pengumuman.edit', $pengumuman->id)}}" class="btn btn-sm btn-warning text-white mb-3">Edit</a>
<a href="{{route('pengumuman.index')}}" class="btn btn-sm btn-danger text-white mb-3">Kembali</a>
<div class="card mb-3">
  <img src="{{ Storage::url($pengumuman->sampul) }}" height="450px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$pengumuman->judul}}</h5>
    <p class="card-text">{!!$pengumuman->konten!!}</p>
    <p class="card-text"><small class="text-muted">{{$pengumuman->created_at->diffForHumans()}}</small></p>
  </div>
</div>


@endsection