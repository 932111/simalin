<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function gangguan()
    {
        return $this->belongsToMany('App\Gangguan', 'kategori_gangguan', 'id_kategori','id_gangguan');
    }

    protected $table = 'data_kategori';

    protected $fillable = [
        'nama'
    ];
}
