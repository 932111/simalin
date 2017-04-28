<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilPerbaikan extends Model
{
    protected $table = 'hasil_perbaikan';

    protected $fillable = [
        'hasil_perbaikan', 'id_admin'
    ];

    public function gangguan()
    {
        return $this->belongsToMany('App\Gangguan', 'hasil_gangguan', 'id_hasil_perbaikan', 'id_gangguan');
    }
}
