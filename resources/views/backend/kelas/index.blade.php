@extends('layouts.dashboard')

@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Halaman Kelas</h6>
            <br>
                <center><a href="{{ route('kelas.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-download fa-sm text-white-50"></i> Tambah</a></center>
            <br>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                             <thead class="thead">
                            <tr>
                                <th>No</th>
                                <th>Kelas</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                             </thead>

                             <tbody>
                @php $no =1; @endphp
                @foreach($kelas as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama_kelas }}</td>
                    <td><form action="{{ route('kelas.destroy', $data->id) }}" method="post" style="text-align: center;">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
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

{{-- Modal --}}
<div class="form-feed modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('kelas.store') }}" method="post">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">kelas</label>
        <input class="form-control" type="text" name="nama_kelas">
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection
