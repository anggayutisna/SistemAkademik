@extends('layouts.dashboard')

@section('content')
  <form action="{{ route('siswa.update', $siswa->id) }}" method="post" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Nis</label>
        <input id="nis" class="form-control" type="text" name="nis" value="{{ $siswa->nis }}">
    </div>
    <div class="form-group">
        <label for="">Nama</label>
         <input type="text" class="form-control" name="nama_siswa" value="{{ $siswa->nama_siswa }}">
    </div>
    <div class="form-group">
        <label for="">Foto</label>
        <input type="file" class="form-control" name="foto" value="{{ $siswa->foto }}">
        <img src="{{ asset('assets/img/siswa/'.$siswa->foto) }}" alt="">
    </div>
     <div class="form-group">
        <label for="">Kelas</label>
        <select name="kelas_id" class="form-control">
    @foreach($kelas as $data)
        <option value="{{ $data->id }}" {{ $siswa->kelas->id == $data->id ? 'selected="selected"' : '' }}>
            {{ $data->nama_kelas }}
        </option>
    @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Jurusan</label>
        <select name="jurusan_id" class="form-control">
    @foreach($jurusan as $data)
        <option value="{{ $data->id }}" {{ $siswa->jurusan->id == $data->id ? 'selected="selected"' : '' }}>
            {{ $data->nama_jurusan }}
        </option>
    @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Tempat TInggal</label>
        <input class="form-control" type="text" name="tempat_tinggal" value="{{ $siswa->tempat_tinggal }}">
    </div>
    <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input class="form-control" type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}">
    </div>
    <div class="form-group">
        <label for="">No Telpon</label>
        <input class="form-control" type="text" name="no_telpon" value="{{ $siswa->no_telpon }}">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <select name="email_id" class="form-control">
    @foreach($user as $data)
        <option value="{{ $data->id }}" {{ $siswa->user->id == $data->id ? 'selected="selected"' : '' }}>
            {{ $data->email }}
        </option>
    @endforeach
        </select>
    </div>
   <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">
                        Simpan Data
                        </button>
                    </div>
        </form>
@endsection
