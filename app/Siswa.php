<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nama_siswa', 'foto', 'kelas_id', 'jurusan_id', 'tempat_tinggal', 'tanggal_lahir', 'no_telpon', 'email_id'];
    public $timestamps = true;

    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'kelas_id');
    }

    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan', 'jurusan_id');
    }

    public function user()
    {
        return $this->belongsTo("App\User", 'email_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
