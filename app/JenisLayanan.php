<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisLayanan extends Model
{
    protected $table = 'data_jenis_layanan';

    protected $fillable = [
        'nama_layanan'
    ];
}
