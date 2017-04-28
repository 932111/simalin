<?php

use Illuminate\Database\Seeder;
Use App\Penanganan;

class PenangananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penanganan = new Penanganan();
        $penanganan->nama = 'offline';
        $penanganan->save();

        $penanganan = new Penanganan();
        $penanganan->nama = 'online';
        $penanganan->save();
    }
}
