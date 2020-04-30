<?php

use Illuminate\Database\Seeder;
use App\User;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = new User;
        $siswa->email = "asep@gmail.com";
        $siswa->password = bcrypt("asep2020");
        $siswa->save();
        $siswa->attachRole("guru");
    }
}
