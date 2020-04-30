@extends('layouts.dashboard')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
@endsection

@section('js')
    <script src="{{ asset('assets/backend/start/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/backend/start/js/select2-init.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#select2').select2({});
    })
</script>
<script>
    $(document).ready(function () {
        $('#select22').select2({});
    })
</script>
@endsection

@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Halaman Siswa</h6>
            <br>
                <center><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-download fa-sm text-white-50"></i> Tambah</a></center>
            <br>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead class="thead">
                        <tr>
                        <th>Nis</th>
                        <th>Nama Siswa</th>
                        <th>Foto</th>
                        <th style="width:10%">Kelas</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                    <tbody>
                            @foreach($siswa as $data)
                            <tr>
                                <td>{{ $data->nis }}</td>
                                <td>{{ $data->nama_siswa }}</td>
                                <td><center><img src="{{ asset('assets/img/siswa/'.$data->foto) }}" alt="" height="100px" width="100px"></center></td>
                                <td>{{ $data->kelas->nama_kelas }}</td>
                                <td>{{ $data->jurusan->nama_jurusan }}</td>
                                <td>{{ $data->user->email }}</td>
                                <td><center><a href="{{ route('siswa.edit', $data->id) }}" class="btn btn -sm btn-warning">Edit Data</a></center><br>
                                {{--  <td><center><button class="show.bs.modal btn btn -sm btn-warning" data-toggle="modal" data-target="#editModal" style="center"
                                    data-siswa="{{ $data->id }}"
                                    data-nis="{{ $data->nis }}">Edit Data</button></center><br>  --}}
                                <form action="{{ route('siswa.destroy', $data->id) }}" method="post" style="text-align: center;">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                                </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Nis</label>
        <input class="form-control" type="number" name="nis">
    </div>
    <div class="form-group">
        <label for="">Nama</label>
         <input type="text" class="form-control" name="nama_siswa">
    </div>
    <div class="form-group">
        <label for="">Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
     <div class="form-group">
        <label for="">Kelas</label>
        <select id="select2" name="kelas" class="form-control" style="width:100%">
    @foreach($kelas as $data)
        <option value="{{ $data->id }}">
            {{ $data->nama_kelas }}
        </option>
    @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Jurusan</label>
        <select name="jurusan" class="form-control">
    @foreach($jurusan as $data)
        <option value="{{ $data->id }}">
            {{ $data->nama_jurusan }}
        </option>
    @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Tempat TInggal</label>
        <input class="form-control" type="text" name="tempat_tinggal">
    </div>
    <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input class="form-control" type="date" name="tanggal_lahir">
    </div>
    <div class="form-group">
        <label for="">No Telpon</label>
        <input class="form-control" type="number" name="no_telpon">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <select id="select22" name="email" class="form-control" style="width:100%">
    @foreach($user as $data)
        <option value="{{ $data->id }}">
            {{ $data->email }}
        </option>
    @endforeach
        </select>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
    </div>
  </div>
  </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('siswa.update', $data->id) }}" method="post" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Nis</label>
        <input id="nis" class="form-control" type="text" name="nis" >
    </div>
    <div class="form-group">
        <label for="">Nama</label>
         <input type="text" class="form-control" name="nama_siswa">
    </div>
    <div class="form-group">
        <label for="">Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
     <div class="form-group">
        <label for="">Kelas</label>
        <select name="kelas" class="form-control">
    @foreach($kelas as $data)
        <option value="{{ $data->id }}">
            {{ $data->nama_kelas }}
        </option>
    @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Jurusan</label>
        <select name="jurusan" class="form-control">
    @foreach($jurusan as $data)
        <option value="{{ $data->id }}">
            {{ $data->nama_jurusan }}
        </option>
    @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Tempat TInggal</label>
        <input class="form-control" type="text" name="tempat_tinggal">
    </div>
    <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input class="form-control" type="date" name="tanggal_lahir">
    </div>
    <div class="form-group">
        <label for="">No Telpon</label>
        <input class="form-control" type="text" name="no_telpon">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <select name="email" class="form-control">
    @foreach($user as $data)
        <option value="{{ $data->id }}">
            {{ $data->email }}
        </option>
    @endforeach
        </select>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
    </div>
  </div>
  </div>
</div>
<script>
    $('#editModal').on('.show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var nis = button.data('nis');
        var nama_siswa = button.data('nama_siswa');
        var foto = button.data('foto');
        var kelas_id = button.data('kelas_id');
        var jurusan_id = button.data('jurusan_id');
        var tempat_tinggal = button.data('tempat_tinggal');
        var tanggal_lahir = button.data('tanggal_lahir');
        var no_telpon = button.data('no_telpon');
        var email_id = button.data('email_id');
        var modal = $(this);
        modal.find('modal-title').text('Ubah data untuk Siswa' + nama_siswa)
        // Use above variables to manipulate the DOM

    });
</script>
@endsection

