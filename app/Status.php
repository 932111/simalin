<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'data_status';

    protected $fillable = [
        'keterangan'
    ];
}
