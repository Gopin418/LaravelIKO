<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ADL extends Model
{
    public $timestamps = false;

    protected $table = "ADL";

    protected $casts = [
        "aktivitas" => "array",
        "adb" => "array",
        "jenis_pencemaran" => "array",
        "potensi_pencemaran" => "array",
        "pengendalian" => "array",
        "penanggung_jawab" => "array",
        "keterangan" => "array"
    ];
}
