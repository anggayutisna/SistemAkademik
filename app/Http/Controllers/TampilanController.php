<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Guru;
use App\KategoriNilai;
use App\MataPelajaran;
use App\Nilai;
use App\Kelas;

class TampilanController extends Controller
{
    public function listsiswa(Guru $guru, Siswa $siswa, Kelas $kelas)
    {
        $siswa = Siswa::orderBy('kelas_id', 'desc')->get();
        $guru = Guru::where('nama_guru', $guru->id);
        return view('backend.guru.listsiswa', compact('siswa', 'kelas', 'guru'));
    }

    public function penilaian(KategoriNilai $kategorinilai, Siswa $siswa, Nilai $nilai, Kelas $kelas, MataPelajaran $matapelajaran)
    {
        $siswa = Siswa::where('slug', $siswa->slug)->get();
        $nilai = Nilai::where('nilai', $nilai->siswa_id)->get();
        $kategorinilai = KategoriNilai::all();
        return view('backend.guru.penilaian', compact('siswa', 'nilai', 'kategorinilai'));
    }

    public function profile(Guru $guru)
    {
    }
}
