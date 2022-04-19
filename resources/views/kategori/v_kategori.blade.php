@extends('admin.v_template')
@section('title', 'Kategori')

@section('content')



<div class="row">
  @if(session('success'))
  <p class="alert alert-success">{{ session('success') }}</p>
  @endif
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Kategori</h4>
        <a href=" {{route('kategori.create')}} " class="btn btn-md btn-outline-primary">Tambah Kategori Baru</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-primary">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1  ?>
              @foreach($kategori as $data)
              <tr style="color: black;">
                <td>{{$no++}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->slug}}</td>
                <td>
                  <!-- Modal -->

                  <a href="{{route('kategori.edit', $data->id)}}" class="btn btn-sm btn-warning text-white">Edit</a>
                  <form method="POST" action="{{ route('kategori.destroy', $data->id) }}" style="display: inline-block;">
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
      </div>
    </div>
  </div>
</div>

{{$kategori->links()}}


@endsection