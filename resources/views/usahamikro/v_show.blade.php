@extends('admin.v_template')
@section('title', 'Detail Potensi Desa')

@section('content')
<a href="{{route('usahamikro.edit', $usahamikro->id)}}" class="btn btn-sm btn-warning text-white mb-3">Edit</a>
<a href="{{route('usahamikro.index')}}" class="btn btn-sm btn-danger text-white mb-3">Kembali</a>
<div class="card mb-3">
  <img src="{{ Storage::url($usahamikro->sampul) }}" height="450px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$usahamikro->judul}}</h5>
    <p class="card-text">{!!$usahamikro->konten!!}</p>
    <p class="card-text"><small class="text-muted">{{$usahamikro->created_at->diffForHumans()}}</small></p>
  </div>
</div>


@endsection