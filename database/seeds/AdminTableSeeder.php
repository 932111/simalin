<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Admin();
        $user->nama = 'raga';
        $user->id_jenis = '1';
        $user->email = 'raga356@yahoo.co.id';
        $user->password = Hash::make('111111');
        $user->save();
    }
}
