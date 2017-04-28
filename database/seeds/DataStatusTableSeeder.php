<?php

use Illuminate\Database\Seeder;

use App\Status;

class DataStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Status();
        $status->keterangan = 'Laporan baru';
        $status->save();

        $status = new Status();
        $status->keterangan = 'Penanganan Online';
        $status->save();

        $status = new Status();
        $status->keterangan = 'Penanganan Offline';
        $status->save();

        $status = new Status();
        $status->keterangan = 'Penanganan Selesai';
        $status->save();
    }
}
