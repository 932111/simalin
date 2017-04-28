<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penanganan extends Model
{
    protected $table = 'data_jenis_penanganan';

    protected $fillable = [
        'nama'
    ];

    public function gangguan()
    {
        return $this->belongsToMany('App\Gangguan', 'penanganan_laporan', 'id_jenis_penanganan', 'id_gangguan');
    }
}
