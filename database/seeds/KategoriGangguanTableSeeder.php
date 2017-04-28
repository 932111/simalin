<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class KategoriGangguanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = new Kategori();
        $kategori->nama = 'Kerusakan Perangkat';
        $kategori->save();

        $kategori = new Kategori();
        $kategori->nama = 'Gangguan Akses Internet';
        $kategori->save();

        $kategori = new Kategori();
        $kategori->nama = 'Tidak Ada Jaringan';
        $kategori->save();

        $kategori = new Kategori();
        $kategori->nama = 'Kehilangan Perangkat';
        $kategori->save();

        $kategori = new Kategori();
        $kategori->nama = 'Force Majure(Bencana Alam)';
        $kategori->save();
    }
}
