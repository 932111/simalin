<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aplikasi extends Model
{
    protected $table = 'data_aplikasi';

    protected $fillable = [
        'nama', 'id_pemakai', 'nama_pengembang', 'kontak_pengembang', 'id_jenis', 'deskripsi_aplikasi'
    ];
}
