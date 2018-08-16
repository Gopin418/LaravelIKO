<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nutrifood extends Model
{
    public $timestamps = false; //created_at updated_at tidak ada

    protected $table = "nutrifood";

    protected $fillable = [
        'id_project',
        'pj_project',
        'no_telp'
    ];
}
