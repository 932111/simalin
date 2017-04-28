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
        $jenisadmin->nama_jenis = 'ADMINISTRATOR';
        $jenisadmin->save();

        $jenisadmin = new JenisAdmin();
        $jenisadmin->nama_jenis = 'TIM TEKNIS';
        $jenisadmin->save();

        $jenisadmin = new JenisAdmin();
        $jenisadmin->nama_jenis = 'KOORDINATOR LAPANGAN';
        $jenisadmin->save();

        $jenisadmin = new JenisAdmin();
        $jenisadmin->nama_jenis = 'KASI INFRASTRUKTUR';
        $jenisadmin->save();

        $jenisadmin = new JenisAdmin();
        $jenisadmin->nama_jenis = 'KASI APLIKASI';
        $jenisadmin->save();

        $jenisadmin = new JenisAdmin();
        $jenisadmin->nama_jenis = 'KABID';
        $jenisadmin->save();
    }
}
