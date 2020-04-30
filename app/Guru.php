<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['nama_guru', 'foto', 'jurusan_id', 'matapelajaran_id', 'tempat_tinggal', 'tanggal_lahir', 'no_telpon', 'email_id'];
    public $timestamps = true;

    public function matapelajaran()
    {
        return $this->belongsToMany('App\MataPelajaran', 'guru_matapelajaran', 'guru_id', 'matapelajaran_id');
    }

    public function jurusan()
    {
        return $this->belongsToMany('App\Jurusan', 'guru_jurusan', 'guru_id', 'jurusan_id');
    }

    public function kelas()
    {
        return $this->belongsToMany('App\Kelas', 'guru_kelas', 'guru_id', 'kelas_id');
    }

    public function user()
    {
        return $this->belongsTo("App\User", 'email_id');
    }
}
