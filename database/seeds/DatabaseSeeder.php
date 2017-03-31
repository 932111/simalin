<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(DataAplikasiTableSeeder::class);
        $this->call(DataAsalPelaporTableSeeder::class);
        $this->call(DataJaringanTableSeeder::class);
        $this->call(DataJenisAdminTableSeeder::class);
        $this->call(DataJenisLayananTableSeeder::class);
        $this->call(DataStatusTableSeeder::class);
        $this->call(AdminTableSeeder::class);
    }
}
