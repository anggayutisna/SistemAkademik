@extends('layouts.frontend')

@section('nav')
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/frontend/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Halaman List Siswa</h2>
              <p><time></time></p>
            </div>
          </div>
        </div>
      </div>

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="{{url('g')}}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span>Guru</span>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span>List Siswa</span>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Penilaian</span>
      </div>
    </div>
@endsection

@section('content')
<br>
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Identitas Siswa</h1>
    </div>
</div>
    @foreach ($siswa as $data)
 <div class="container-fluid mb-4">
    <div class="col-lg-6 mb-4">
                  <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                      Nis
                      <div class="text-white-50 small">
                          {{ $data->nis }}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                        Nama
                      <div class="text-white-50 small">
                      {{ $data->nama_siswa }}
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-success text-white shadow">
                    <div class="card-body">
                        Kelas
                      <div class="text-white-50 small">
                          {{ $data->kelas->nama_kelas }}
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      Jurusan
                      <div class="text-white-50 small">
                          {{ $data->jurusan->nama_jurusan }}
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
<br>
            <div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Penilaian</h1>
    </div>
</div>
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
                                <th>Mata Pelajaran</th>
                                @foreach ($kategorinilai as $data)
                                <th>{{ $data->kategori_nilai }}</th>
                                @endforeach
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nilai as $data)
                            <tr>
                                <td>{{ $data->matapelajaran->mata_pelajaran }}</td>
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
        <label for="">Nilai</label>
        <input class="form-control" type="text" name="nilai">
    </div>

    <div class="form-group">
        <label for="">Kategori Nilai</label>
        <select id="kategorinilaiselect" name="kategorinilai" class="form-control">

        <option value="">

        </option>

        </select>
    </div>

    {{--  <div class="form-group">
        <label for="">Mata Pelajaran</label>
        <select name="mapel" class="form-control">
    @foreach($mapel as $data)
        <option value="{{ $data->id }}">
            {{ $data->mata_pelajaran }}
        </option>
    @endforeach
        </select>
    </div>  --}}

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>

<script>
    $("#exampleModal #kategorinilaiselect").select2();
</script>
@endsection
