@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Guru</div>
                <div class="card-body">
                    <form action="{{ route('guru.update', $guru->id) }}" method="post" enctype="multipart/form-data">
                       <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Nama Guru</label>
    <input class="form-control" type="text" name="nama_guru" value="{{ $guru->nama_guru }}">
    </div>
    <div class="form-group">
        <label for="">Foto</label>
        <input type="file" class="form-control" name="foto" value="{{ asset('assets/img/guru/'.$guru->foto) }}">
    </div>
    <div class="form-group">
        <img src="{{ asset('assets/img/guru/'.$guru->foto) }}" alt="" height="100px" width="100px">
    </div>
     <div class="form-group">
        <label for="">Mata Pelajaran</label>
        <select name="mapel" class="form-control" value="{{ $guru->mapel_id }}">
    @foreach($mapel as $data)
        <option value="{{ $data->id }}">
            {{ $data->mata_pelajaran }}
        </option>
    @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Tempat Tinggal</label>
        <input class="form-control" type="text" name="tempat_tinggal" value="{{ $guru->tempat_tinggal }}">
    </div>

    <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input class="form-control" type="date" name="tanggal_lahir" value="{{ $guru->tanggal_lahir }}">
    </div>
    <div class="form-group">
        <label for="">No Telpon</label>
        <input class="form-control" type="text" name="no_telpon" value="{{ $guru->no_telpon }}">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input class="form-control" type="email" name="email" value="{{ $guru->email }}">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input class="form-control" type="password" name="password" value="{{ $guru->password }}">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('admin/guru') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
