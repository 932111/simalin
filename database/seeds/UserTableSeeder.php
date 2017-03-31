<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->nama = 'raga';
        $user->email = 'raga356@yahoo.co.id';
        $user->password = Hash::make('111111');
        $user->no_id = '1301092005';
        $user->id_asal = '1';
        $user->save();

    }
}
