<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetugasGangguan extends Model
{
    protected $table = 'petugas_gangguan';

    protected $fillable = [
        'id_gangguan', 'id_admin'
    ];
}
