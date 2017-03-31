<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisAdmin extends Model
{
    protected $table = 'data_jenis_admin';

    protected $fillable = [
        'nama_jenis'
    ];
}
