<?php

use Illuminate\Database\Seeder;
use App\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = new Jurusan;

        $jurusan->nama_jurusan = "Rekayasa Perangkat Lunak";
        $jurusan->save();

        $jurusan = new Jurusan;

        $jurusan->nama_jurusan = "Teknik Sepeda Motor";
        $jurusan->save();

        $jurusan = new Jurusan;

        $jurusan->nama_jurusan = "Teknik Kendaraan Ringan";
        $jurusan->save();
    }
}
