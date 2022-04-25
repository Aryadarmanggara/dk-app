@extends('admin.v_template')
@section('title', 'Alam')

@section('content')



<div class="row">
  @if(session('success'))
  <p class="alert alert-success">{{ session('success') }}</p>
  @endif
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Alam</h4>
        <a href=" {{route('alam.create')}} " class="btn btn-md btn-outline-primary">Tambah alam Baru</a>
      </div>
      <div class="card-body">
        @if($alam[0])
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-primary">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Sampul</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1  ?>
              @foreach($alam as $data)
              <tr style="color: black;">
                <td>{{$no++}}</td>
                <td>{{$data->judul}}</td>
                <td><img src="{{ Storage::url($data->sampul) }}" class="mb-3" alt="" width="100px"></td>
                <td>{{$data->slug}}</td>
                <td>
                  <a href="{{route('alam.show', $data->id)}}" class="btn btn-sm btn-info text-white">Lihat</a>

                  <a href="{{route('alam.edit', $data->id)}}" class="btn btn-sm btn-warning text-white">Edit</a>
                  <form method="POST" action="{{ route('alam.destroy', $data->id) }}" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                  </form>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @else
        <p class="alert alert-danger">Anda belum memiliki data apapun !</p>
        @endif
      </div>
    </div>
  </div>
</div>

{{$alam->links()}}


@endsection