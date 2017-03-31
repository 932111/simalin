<?php

use Illuminate\Database\Seeder;

use App\JenisLayanan;

class DataJenisLayananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenislayanan = new JenisLayanan();
        $jenislayanan->nama_layanan = 'Jaringan';
        $jenislayanan->save();

        $jenislayanan = new JenisLayanan();
        $jenislayanan->nama_layanan = 'Aplikasi';
        $jenislayanan->save();
    }
}
