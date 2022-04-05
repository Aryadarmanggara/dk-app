@extends('admin.v_template')
@section('title', 'Aparatur Desa')

@section('content')

<div class="row">
  @if(session('success'))
  <p class="alert alert-success">{{ session('success') }}</p>
  @endif
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Aparatur Desa</h4>
        <a href=" {{route('aparatur_desa.create')}} " class="btn btn-md btn-outline-primary">Tambah Data Aparatur Desa</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-primary">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">NIP</th>
                <th scope="col">Foto</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1  ?>
              @foreach($aparaturs as $aparatur)
              <tr style="color: black;">
                <td>{{$no++}}</td>
                <td>{{$aparatur->nama}}</td>
                <td>{{$aparatur->jabatan}}</td>
                <td>{{$aparatur->nip}}</td>
                <td>
                  <img src="{{ Storage::url($aparatur->image) }}" alt="" width="100px">
                </td>
                <td>
                  <button type="button" class="btn btn-sm btn-info text-white" data-toggle="modal" data-target="#exampleModalCenter">Detail</button>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Detail Data : {{ $aparatur->nama }}</h5>
                          <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <img src="{{ Storage::url($aparatur->image) }}" class="mb-3" alt="" width="100%">
                          <table>
                            <tbody>
                              <tr>
                                <th class="text-nowrap text-dark" scope="row">Nama</th>
                                <td>{{$aparatur->nama}}</td>
                              </tr>
                              <tr>
                                <th class="text-nowrap text-dark" scope="row">Jabatan</th>
                                <td>{{$aparatur->jabatan}}</td>
                              </tr>
                              <tr>
                                <th class="text-nowrap text-dark" scope="row">NIP</th>
                                <td>{{$aparatur->nip}}</td>
                              </tr>
                              <tr>
                                <th class="text-nowrap text-dark" scope="row">Nomor HP</th>
                                <td>{{$aparatur->nohp}}</td>
                              </tr>
                              <tr>
                                <th class="text-nowrap text-dark" scope="row">Email</th>
                                <td>{{$aparatur->email}}</td>
                              </tr>
                              <tr>
                                <th class="text-nowrap text-dark" scope="row">Alamat</th>
                                <td>{{$aparatur->alamat}}</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="{{route('aparatur_desa.edit', $aparatur->id)}}" class="btn btn-sm btn-warning text-white">Edit</a>
                  <form method="POST" action="{{ route('aparatur_desa.destroy', $aparatur->id) }}" style="display: inline-block;">
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



@endsection