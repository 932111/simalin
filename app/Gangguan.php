<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Gangguan extends Model
{

    public function kategori()
    {
        return $this->belongsToMany('App\Kategori', 'kategori_gangguan', 'id_gangguan','id_kategori');
    }

    public function media()
    {
        return $this->belongsToMany('App\Media', 'media_laporan', 'id_gangguan', 'id_media');
    }

    public function admin()
    {
        return $this->belongsToMany('App\Admin', 'petugas_gangguan', 'id_gangguan', 'id_admin');
    }

    public function hasil()
    {
        return $this->belongsToMany('App\HasilPerbaikan', 'hasil_gangguan', 'id_gangguan', 'id_hasil_perbaikan');
    }

    public function penanganan()
    {
        return $this->belongsToMany('App\Penanganan','penanganan_laporan', 'id_gangguan', 'id_jenis_penanganan');
    }

    protected $table = 'data_gangguan';

    protected $fillable = [
        'id_pelapor', 'id_jenis', 'id_aplikasi_atau_jaringan', 'id_status', 'no_track', 'detail', 'id_media'
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

    public function getAsalLaporan()
    {
        $idpelapor = $this->id_pelapor;
        $id = User::where('id', $idpelapor)->first()->id_asal;
        return AsalPelapor::where('id', $id)->first()->nama_asal;

        //if($id == 1)
        //{
        //}
        //else
        //{
        //    $asal = AsalPelapor::where('id', $id)->first()->nama_asal;
        //    $expr = '/(?<=\b)[a-z]/i';
         //   preg_match_all($expr,$asal,$matches);
         //   return $namaAsal = implode('',$matches[0]);
        //}
    }

    public function pelapor()
    {
        $idp = $this->id_pelapor;
        $pengguna = User::where('id', $idp)->first()->nama;
        return $pengguna;
    }

    public function namaDepanPelapor()
    {
        $idp = $this->id_pelapor;
        $pengguna = User::where('id', $idp)->first()->nama;
        $nama = explode(' ', $pengguna);
        $namadepan = $nama[0];
        return $namadepan;
    }

    public function getId()
    {
        $id = Gangguan::where('id', $this->id)->first()->id;
        return $id;
    }

    public function getNoTrack()
    {
        return Gangguan::where('no_track', $this->no_track)->first()->no_track;
    }

    public function getCreatedAt()
    {
        Date::setLocale('id');
        return Date::parse($this->created_at);
    }

    public function getCurrentDate()
    {
        Date::setLocale('id');
        return Date::parse(Carbon::now());
    }

    public function getUpdatedAt()
    {
        Date::setLocale('id');
        return Date::parse($this->updated_at);
    }

    public function hasKategori($id)
    {
        if($this->kategori()->where('data_kategori.id', $id)->first())
        {
            return true;
        }
        return false;
    }

    public function hasMedia($id)
    {
        if($this->media()->where('data_media.id', $id)->first())
        {
            return true;
        }
        return false;
    }

    public function getIdAsal()
    {
        return User::where('id', $this->id_pelapor)->first()->id_asal;
    }

    public function petugas($id)
    {
        return Admin::where('id', $id)->first()->nama;
    }
}
