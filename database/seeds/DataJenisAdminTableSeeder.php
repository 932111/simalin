<?php

use Illuminate\Database\Seeder;

use App\JenisAdmin;

class DataJenisAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenisadmin = new JenisAdmin();
        $jenisadmin->nama_jenis = 'Tim Teknis';
        $jenisadmin->save();

        $jenisadmin = new JenisAdmin();
        $jenisadmin->nama_jenis = 'Koordinator Lapangan';
        $jenisadmin->save();
    }
}
