<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenangananLaporan extends Model
{
    protected $table = 'penanganan_laporan';

    protected $fillable = [
        'id_gangguan', 'id_jenis_penanganan'
    ];
}
