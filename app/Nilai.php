<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $fillable = ['siswa_id', 'nilai', 'matapelajaran_id', 'kategorinilai_id'];
    public $timestamps = true;

    public function matapelajaran()
    {
        return $this->belongsTo('App\MataPelajaran', 'matapelajaran_id');
    }

    public function siswa()
    {
        return $this->belongsTo('App\Siswa', 'siswa_id');
    }

    public function kategorinilai()
    {
        return $this->belongsTo('App\KategoriNilai', 'kategorinilai_id');
    }
}
