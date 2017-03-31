<?php

use Illuminate\Database\Seeder;

use App\AsalPelapor;

class DataAsalPelaporTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asalpelapor = new AsalPelapor();
        $asalpelapor->nama_asal = 'Kominfo Pyk';
        $asalpelapor->alamat_asal = 'pyk';
        $asalpelapor->no_kontak = '98958659';
        $asalpelapor->save();

        $asalpelapor = new AsalPelapor();
        $asalpelapor->nama_asal = 'Camat pyk utara';
        $asalpelapor->alamat_asal = 'pyk';
        $asalpelapor->no_kontak = '7675482';
        $asalpelapor->save();
    }
}
