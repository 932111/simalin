<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsalPelapor extends Model
{
    protected $table = 'data_asal_pelapor';

    protected $fillable = [
        'nama_asal', 'alamat_asal', 'no_kontak'
    ];
}
