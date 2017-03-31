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
        $status->keterangan = 'Laporan belum diproses';
        $status->save();

        $status = new Status();
        $status->keterangan = 'Laporan sedang diproses';
        $status->save();

        $status = new Status();
        $status->keterangan = 'Laporan selesai diproses';
        $status->save();
    }
}
