<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JSA extends Model
{
    public $timestamps = false;

    protected $table = "JSA";

    protected $casts = [
        'aktivitas' => 'array',
        'potensi_bahaya' => 'array',
        'pengendalian_bahaya' => 'array',
        'penanggung_jawab' => 'array',
        'keterangan' => 'array'
    ];
}
