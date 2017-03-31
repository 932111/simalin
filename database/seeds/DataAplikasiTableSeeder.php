<?php

use Illuminate\Database\Seeder;

use App\Aplikasi;

class DataAplikasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aplikasi = new Aplikasi();
        $aplikasi->nama = 'AppTes';
        $aplikasi->id_pemakai = '1';
        $aplikasi->nama_pengembang = 'raga';
        $aplikasi->kontak_pengembang = '+6282284119014';
        $aplikasi->id_jenis = '1';
        $aplikasi->deskripsi_aplikasi = 'aplikasi tes';
        $aplikasi->save();
    }
}
