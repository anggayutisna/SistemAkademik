<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $fillable = ['mata_pelajaran'];
    public $timestamps = true;

    public function guru()
    {
        return $this->belongsToMany('App\Guru', 'guru_matapelajaran', 'matapelajaran_id', 'guru_id');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($matapelajaran) {

            if ($matapelajaran->guru->count() > 0) {

                $html = 'matapelajaran tidak bisa dihapus karena masih memiliki Guru : ';
                $html .= '<ul>';
                foreach ($matapelajaran->guru as $data) {
                    $html .= "<li>$data->nama_guru</li>";
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
