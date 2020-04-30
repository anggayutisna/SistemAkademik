<?php

use Illuminate\Database\Seeder;
use App\MataPelajaran;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matapelajaran = new MataPelajaran;

        $matapelajaran->mata_pelajaran = "Matematika";
        $matapelajaran->save();

        $matapelajaran = new MataPelajaran;

        $matapelajaran->mata_pelajaran = "Fisika";
        $matapelajaran->save();

        $matapelajaran = new MataPelajaran;

        $matapelajaran->mata_pelajaran = "Kimia";
        $matapelajaran->save();

        $matapelajaran = new MataPelajaran;

        $matapelajaran->mata_pelajaran = "Sejarah";
        $matapelajaran->save();

        $matapelajaran = new MataPelajaran;

        $matapelajaran->mata_pelajaran = "Al-Qur'an";
        $matapelajaran->save();

        $matapelajaran = new MataPelajaran;

        $matapelajaran->mata_pelajaran = "Pendidikan Agama Islam";
        $matapelajaran->save();

        $matapelajaran = new MataPelajaran;

        $matapelajaran->mata_pelajaran = "Bahasa Indonesia";
        $matapelajaran->save();

        $matapelajaran = new MataPelajaran;

        $matapelajaran->mata_pelajaran = "Bahasa Inggris";
        $matapelajaran->save();
    }
}
