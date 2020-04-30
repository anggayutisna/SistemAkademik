@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Siswa</div>
                <div class="card-body">
                    <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Nis</label>
        <input class="form-control" type="text" name="nis">
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
    <div class="form-group">
        <label for="">Email</label>
        <select name="password" class="form-control">
    @foreach($user as $data)
        <option value="{{ $data->id }}">
            {{ $data->password }}
        </option>
    @endforeach
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('admin/siswa') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
