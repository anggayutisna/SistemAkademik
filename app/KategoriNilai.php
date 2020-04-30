<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class KategoriNilai extends Model
{
    protected $fillable = ['kategori_nilai'];
    public $timestamps = true;

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($kategorinilai) {

            if ($kategorinilai->nilai->count() > 0) {

                $html = 'kategorinilai tidak bisa dihapus karena masih memiliki nilai : ';
                $html .= '<ul>';
                foreach ($kategorinilai->nilai as $data) {
                    $html .= "<li>$data->nilai</li>";
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
