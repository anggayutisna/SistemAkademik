<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Jurusan extends Model
{
    protected $fillable = ['nama_jurusan', 'guru_id', 'jurusan_id'];
    public $timestamps = true;

    public function guru()
    {
        return $this->belongsToMany('App\Guru', 'guru_jurusan', 'jurusan_id', 'guru_id');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($jurusan) {

            if ($jurusan->siswa->count() > 0) {

                $html = 'Jurusan tidak bisa dihapus karena masih memiliki Guru : ';
                $html .= '<ul>';
                foreach ($jurusan->siswa as $data) {
                    $html .= "<li>$data->nama_siswa</li>";
                }
                $html .= '</ul>';
                Session::flash("flash_notification", [
                    "level" => "danger",
                    "message" => $html
                ]);

                return false;
            }
        });
    }
}
