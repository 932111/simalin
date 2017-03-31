<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jaringan extends Model
{
    protected $table = 'data_jaringan';

    protected $fillable = [
        'nama_jaringan', 'alamat', 'no_kontak', 'id_jenis'
    ];
}
