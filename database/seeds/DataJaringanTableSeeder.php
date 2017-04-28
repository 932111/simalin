<?php

use Illuminate\Database\Seeder;

use App\Jaringan;

class DataJaringanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'SKPD';
        $jaringan->id_jenis = '1';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'wifi.id Jembatan Panasonic Dekat CCTV';
        $jaringan->alamat = '-0.225171.100.632368';
        $jaringan->id_jenis = '1';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'wifi.id Taman Jembatan Ratapan Ibu';
        $jaringan->alamat = '-0.229448.100.636293';
        $jaringan->id_jenis = '1';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'wifi.id Taman Rumah Dinas DPRD Kota Payakumbuh';
        $jaringan->alamat = '-0.207179.100.618624';
        $jaringan->id_jenis = '1';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'wifi.id RSUD Adnan WD';
        $jaringan->alamat = '-0.223049.100.639168';
        $jaringan->id_jenis = '1';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'wifi.id Jembatan Panasonic Dekat Pasar Buah';
        $jaringan->alamat = '-0.225516.100.632630';
        $jaringan->id_jenis = '1';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'wifi.id Kantor Walikota Baru';
        $jaringan->alamat = '-0.222350.100.630989';
        $jaringan->id_jenis = '1';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'wifi.id Depan Kantor POS';
        $jaringan->alamat = '-0.224090.100.632440';
        $jaringan->id_jenis = '1';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'wifi.id Kolam Renang Ngalau Indah';
        $jaringan->alamat = '-0.256194.100.607145';
        $jaringan->id_jenis = '1';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'wifi.id Kantor Walikota Lama';
        $jaringan->alamat = '-0.259709.100.608802';
        $jaringan->id_jenis = '1';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'wifi.id SMPN 1 / Depan Mesjid Muhammdadiyah';
        $jaringan->alamat = '-0.223986.100.633193';
        $jaringan->id_jenis = '1';
        $jaringan->save();
    }
}
