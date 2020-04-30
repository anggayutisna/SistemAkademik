@extends('layouts.frontend')

@section('nav')
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/frontend/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Halaman Daftar Siswa</h2>
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
        <span class="current">Daftar Siswa</span>
      </div>
    </div>
@endsection

@section('content')
<br>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Halaman Daftar Siswa</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead class="thead">
                        <tr>
                        <th>Nis</th>
                        <th>Nama Siswa</th>
                        <th>Foto</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                            @foreach($siswa as $data)
                            <tr>
                                <td>{{ $data->nis}}</td>
                                <td>{{ $data->nama_siswa }}</td>
                                <td><center><img src="{{ asset('assets/img/siswa/'.$data->foto) }}" alt="" height="100px" width="100px"></center></td>
                                <td>{{ $data->kelas->nama_kelas }}</td>
                                <td>{{ $data->jurusan->nama_jurusan }}</td>
                                <td><center><a href="{{ route('penilaian.siswa', $data->slug) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Nilai</a></center></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container-fluid">
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Halaman Guru</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead class="thead">
                <tr>
                <th>No</th>
                <th>Nis</th>
                <th>Nama siswa</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th colspan="3" style="text-align: center;">Aksi</th>
            </tr>
                </thead>
                <tbody>
                @php $no =1; @endphp
                @foreach($siswa as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nis }}</td>
                    <td>{{ $data->nama_siswa }}</td>
                    <td>{{ $data->kelas->nama_kelas }}</td>
                    <td>{{ $data->jurusan->nama_jurusan }}</td>
                    <td><center><a href="{{ route('penilaian.siswa', $data->nis) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Nilai</a></center></td>                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div> --}}
@endsection
