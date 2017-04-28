<?php

use Illuminate\Database\Seeder;
use App\Media;

class MediaPelaporanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $media = new Media();
        $media->nama = 'SiMALIN';
        $media->save();

        $media = new Media();
        $media->nama = 'Telpon';
        $media->save();

        $media = new Media();
        $media->nama = 'SMS';
        $media->save();

        $media = new Media();
        $media->nama = 'Laporan Langsung';
        $media->save();

        $media = new Media();
        $media->nama = 'Email';
        $media->save();

        $media = new Media();
        $media->nama = 'Media Sosial';
        $media->save();

        $media = new Media();
        $media->nama = 'Surat';
        $media->save();
    }
}
