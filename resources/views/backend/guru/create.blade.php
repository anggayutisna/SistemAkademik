@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Guru</div>
                <div class="card-body">
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
        <label for="">Mata Pelajaran</label>
        <select name="mapel" class="form-control">
    @foreach($mapel as $data)
        <option value="{{ $data->id }}">
            {{ $data->mata_pelajaran }}
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
        <input class="form-control" type="email" name="email">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input class="form-control" type="password" name="password">
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
