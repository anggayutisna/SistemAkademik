<?php

use App\KategoriNilai;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleUserSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(MataPelajaranSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(KategoriNilaiSeeder::class);
    }
}
