<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Kelas extends Model
{
    protected $fillable = ['nama_kelas'];
    public $timestamps = true;

    public function guru()
    {
        return $this->belongsToMany('App\Guru', 'guru_kelas', 'kelas_id', 'guru_id');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($kelas) {

            if ($kelas->siswa->count() > 0) {

                $html = 'kelas tidak bisa dihapus karena masih memiliki Guru : ';
                $html .= '<ul>';
                foreach ($kelas->siswa as $data) {
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
