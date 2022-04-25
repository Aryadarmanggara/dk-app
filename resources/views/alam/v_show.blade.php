@extends('admin.v_template')
@section('title', 'Detail Potensi Desa')

@section('content')
<a href="{{route('alam.edit', $alam->id)}}" class="btn btn-sm btn-warning text-white mb-3">Edit</a>
<a href="{{route('alam.index')}}" class="btn btn-sm btn-danger text-white mb-3">Kembali</a>
<div class="card mb-3">
  <img src="{{ Storage::url($alam->sampul) }}" height="450px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$alam->judul}}</h5>
    <p class="card-text">{!!$alam->konten!!}</p>
    <p class="card-text"><small class="text-muted">{{$alam->created_at->diffForHumans()}}</small></p>
  </div>
</div>


@endsection