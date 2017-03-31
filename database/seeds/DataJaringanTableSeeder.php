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
        $jaringan->nama_jaringan = 'wifi id';
        $jaringan->alamat = 'adipura';
        $jaringan->id_jenis = '1';
        $jaringan->save();

        $jaringan = new Jaringan();
        $jaringan->nama_jaringan = 'wifi id2';
        $jaringan->alamat = 'adipura2';
        $jaringan->id_jenis = '1';
        $jaringan->save();
    }
}
