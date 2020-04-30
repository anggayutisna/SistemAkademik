<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adminRole = new Role;

        $adminRole->name = "admin";
        $adminRole->display_name = "admin";
        $adminRole->description = "Admin Role";
        $adminRole->save();

        /**
         * Create new Role siswa
         * ======================
         */
        $siswaRole = new Role;

        $siswaRole->name = "siswa";
        $siswaRole->display_name = "siswa";
        $siswaRole->description = "siswa Role";
        $siswaRole->save();

        // Create new Role Guru

        $guruRole = new Role;

        $guruRole->name = "guru";
        $guruRole->display_name = "guru";
        $guruRole->description = "guru Role";
        $guruRole->save();

        // Create User Admin role


        $admin = new User;
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt("admin2020");
        $admin->save();
        $admin->attachRole("admin");
    }
}
