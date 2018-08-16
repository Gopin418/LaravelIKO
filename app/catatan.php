<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catatan extends Model
{
    public $timestamps = false; //created_at updated_at tidak ada

    protected $table = "catatan";

    protected $casts = [
        'pekerjaan_berbahaya' => 'array',
        'doc_lampiran'        => 'array',
        'telp_pj'             => 'array',
        'kebutuhan_utility'   => 'array',
        'sistem_terganggu'    => 'array'
    ];

    protected $fillable = [
        'pekerjaan_berbahaya',
        'doc_lampiran',
        'kebutuhan_utility',
        'telp_pj',
        'sistem_terganggu'
    ];
}
