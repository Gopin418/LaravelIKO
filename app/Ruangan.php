<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    public $timestamps = false;

    protected $table = 'ruangan_terbatas';

    protected $attributes = [
        'id_ipb_ruangan' => 'ipb_ruangan_',
        'pemenuhan' => 'Tidak Terpenuhi',
        'keterangan' => 'Tidak Ada Keterangan'
    ];

    protected $casts = [
        'keterangan' => 'array',
        'pemenuhan' => 'array'
    ];

    protected $fillable = [
        'pemenuhan'
    ];
}
