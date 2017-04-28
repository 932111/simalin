<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public function gangguan()
    {
        return $this->belongsToMany('App\Gangguan', 'media_laporan', 'id_media', 'id_gangguan');
    }

    protected $table = 'data_media';

    protected $fillable = [
        'nama'
    ];
}
