<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class Admin extends Authenticatable
{
    use Notifiable;

    public function gangguan()
    {
        return $this->belongsToMany('App\Gangguan', 'petugas_gangguan', 'id_admin', 'id_gangguan');
    }

    protected $table = 'data_admin';

    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'email', 'password', 'id_jenis', 'username', 'nip'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getJenis()
    {
        $jenis = JenisAdmin::where('id', Auth()->user()->id_jenis)->first()->nama_jenis;
        return $jenis;
    }
    public function getNamaDepan()
    {
        $nama = Auth::user()->nama;
        $nama = explode(' ', $nama);

        $namadepan = $nama[0];

        return $namadepan;
    }
}
