<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gangguan extends Model
{
    protected $table = 'data_gangguan';

    protected $fillable = [
        'id_pelapor', 'id_jenis', 'id_aplikasi_atau_jaringan', 'id_status', 'no_track', 'detail'
    ];

    public function getJenisGangguan()
    {
        return JenisLayanan::where('id', $this->id_jenis)->first()->nama_layanan;
    }

    public function getGangguan()
    {
        if($this->id_jenis == 1)
        {
            return Jaringan::where('id', $this->id_aplikasi_atau_jaringan)->first()->nama_jaringan;
        }
        return Aplikasi::where('id', $this->id_aplikasi_atau_jaringan)->first()->nama;
    }

    public function getStatus()
    {
        return Status::where('id', $this->id_status)->first()->keterangan;
    }

    public function getAsalLaporan(){
        $idpelapor = $this->id_pelapor;
        $id = User::where('id', $idpelapor)->first()->id_asal;
        return AsalPelapor::where('id', $id)->first()->nama_asal;
    }
    public function pelapor()
    {
        $idp = $this->id_pelapor;
        $pengguna = User::where('id', $idp)->first()->nama;
        return $pengguna;
    }
}
