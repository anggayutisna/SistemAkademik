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
@endsection

@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Halaman Nilai</h6>
            <br>
                <center><a href="{{ route('nilai.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-download fa-sm text-white-50"></i> Tambah</a></center>
            <br>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                            <thead class="thead">

                                <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Mata Pelajaran</th>
                                <th>Kategori nilai</th>
                                <th>Nilai</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $no =1; @endphp
                            @foreach($nilai as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->siswa->nama_siswa }}</td>
                                <td>{{ $data->matapelajaran->mata_pelajaran }}</td>
                                <td>{{ $data->kategorinilai->kategori_nilai }}</td>
                                <td>{{ $data->nilai }}</td>
                                <td><form action="{{ route('nilai.destroy', $data->id) }}" method="post" style="text-align: center;">
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('nilai.store') }}" method="post">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Nama Siswa</label>
        <select id="select2" name="siswa" class="form-control" style="width:100%">
            @foreach ($siswa as $data)
        <option value="{{ $data->id }}"> {{ $data->nama_siswa }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Mata Pelajaran</label>
        <select id="select22" name="matapelajaran" class="form-control" style="width:100%">
            @foreach ($matapelajaran as $data)
        <option value="{{ $data->id }}"> {{ $data->mata_pelajaran  }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Kategori Nilai</label>
        <select id="select222" name="kategorinilai" class="form-control" style="width:100%">
            @foreach ($kategorinilai as $data)
        <option value="{{ $data->id }}"> {{ $data->kategori_nilai  }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Nilai</label>
        <input class="form-control" type="number" name="nilai">
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
