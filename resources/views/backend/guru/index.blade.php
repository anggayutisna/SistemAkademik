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
<script>
    $(document).ready(function () {
        $('#select222').select2({});
    })
</script>
<script>
    $(document).ready(function () {
        $('#select2222').select2({});
    })
</script>
@endsection

@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Halaman Guru</h6>
               <br>
                <center><a href="{{ route('jurusan.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-download fa-sm text-white-50"></i> Tambah</a></center>
                <br>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                             <thead class="thead">
                            <tr>
                                <th>No</th>
                                <th>Nama Guru</th>
                                <th>Foto</th>
                                <th>mapel</th>
                                <th>Tempat tinggal</th>
                                <th>Tanggal lahir</th>
                                <th>No telpon</th>
                                <th>Email</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                             </thead>

                             <tbody>
                @php $no =1; @endphp
                @foreach($guru as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama_guru }}</td>
                    <td><img src="{{ asset('assets/img/guru/'.$data->foto) }}" alt="" height="100px" width="100px"></td>
                    <td>
                        @foreach ($data->jurusan as $a)
                            {{ $a->nama_jurusan }}
                        @endforeach
                    </td>
                    <td>
                        @foreach ($data->matapelajaran as $a)
                            {{ $a->mata_pelajaran }}
                        @endforeach
                    </td>
                    <td>{{ $data->tempat_tinggal }}</td>
                    <td>{{ $data->tanggal_lahir }}</td>
                    <td>{{ $data->no_telpon }}</td>
                    <td>{{ $data->user->email }}</td>
                    <td><button type="button"class="btn btn -sm btn-warning" data-toggle="modal" data-target="#editModal">Edit Data</button></td>
                    <td><form action="{{ route('guru.destroy', $data->id) }}" method="post">
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable  " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   <form action="{{ route('guru.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Nama Guru</label>
        <input class="form-control" type="text" name="nama_guru">
    </div>
    <div class="form-group">
        <label for="">Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <div class="form-group">
        <label for="">Mengajar Jurusan</label>
        <select style="width:100%" name="jurusan[]" id="select2" class="form-control" multiple>
    @foreach($jurusan as $data)
        <option value="{{ $data->id }}">
            {{ $data->nama_jurusan }}
        </option>
    @endforeach
        </select>
        </div>
     <div class="form-group">
        <label for="">Mata Pelajaran</label>
        <select style="width:100%" name="matapelajaran[]" id="select22" class="form-control" multiple>
    @foreach($matapelajaran as $data)
        <option value="{{ $data->id }}">
            {{ $data->mata_pelajaran }}
        </option>
    @endforeach
        </select>
        </div>
        <div class="form-group">
        <label for="">Mengajar Kelas</label>
        <select style="width:100%" name="kelas[]" id="select2222" class="form-control" multiple>
    @foreach($kelas as $data)
        <option value="{{ $data->id }}">
            {{ $data->nama_kelas }}
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
        <select id="select222" name="email" class="form-control" style="width:100%">
    @foreach($user as $data)
        <option value="{{ $data->id }}">
            {{ $data->email }}
        </option>
    @endforeach
        </select>
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
