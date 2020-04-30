<?php

use Illuminate\Database\Seeder;
use App\Siswa;
use App\User;
use App\Kelas;
use App\Jurusan;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = new User;
        $siswa->email = "anggayutisna@gmail.com";
        $siswa->password = bcrypt("angga2020");
        $siswa->save();
        $siswa->attachRole("siswa");

        $siswa = new User;
        $siswa->email = "harry@gmail.com";
        $siswa->password = bcrypt("harry2020");
        $siswa->save();
        $siswa->attachRole("siswa");

        $siswa = new User;
        $siswa->email = "hasan@gmail.com";
        $siswa->password = bcrypt("hasan2020");
        $siswa->save();
        $siswa->attachRole("siswa");

        $siswa = new User;
        $siswa->email = "reynaldi@gmail.com";
        $siswa->password = bcrypt("reynaldi2020");
        $siswa->save();
        $siswa->attachRole("siswa");

        $siswa = new User;
        $siswa->email = "diaz@gmail.com";
        $siswa->password = bcrypt("diaz2020");
        $siswa->save();
        $siswa->attachRole("siswa");
    }
}
