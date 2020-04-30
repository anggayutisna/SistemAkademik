<?php

use Illuminate\Database\Seeder;
use App\KategoriNilai;

class KategoriNilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategorinilai = new KategoriNilai;

        $kategorinilai->kategori_nilai = "H1";
        $kategorinilai->save();

        $kategorinilai = new KategoriNilai;

        $kategorinilai->kategori_nilai = "H2";
        $kategorinilai->save();

        $kategorinilai = new KategoriNilai;

        $kategorinilai->kategori_nilai = "H3";
        $kategorinilai->save();

        $kategorinilai = new KategoriNilai;

        $kategorinilai->kategori_nilai = "H4";
        $kategorinilai->save();

        $kategorinilai = new KategoriNilai;

        $kategorinilai->kategori_nilai = "H5";
        $kategorinilai->save();

        $kategorinilai = new KategoriNilai;

        $kategorinilai->kategori_nilai = "H6";
        $kategorinilai->save();

        $kategorinilai = new KategoriNilai;

        $kategorinilai->kategori_nilai = "H7";
        $kategorinilai->save();

        $kategorinilai = new KategoriNilai;

        $kategorinilai->kategori_nilai = "H8";
        $kategorinilai->save();

        $kategorinilai = new KategoriNilai;

        $kategorinilai->kategori_nilai = "H9";
        $kategorinilai->save();

        $kategorinilai = new KategoriNilai;

        $kategorinilai->kategori_nilai = "UTS";
        $kategorinilai->save();

        $kategorinilai = new KategoriNilai;

        $kategorinilai->kategori_nilai = "UAS";
        $kategorinilai->save();
    }
}
