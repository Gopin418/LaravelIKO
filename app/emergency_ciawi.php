<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emergency_ciawi extends Model
{
    public $timestamps = false; //created_at updated_at tidak ada

    protected $table = "emer_ciawi";

    public function emer_ciawi() {
        return $this->belongsTo('App\emergency');
    }
}
