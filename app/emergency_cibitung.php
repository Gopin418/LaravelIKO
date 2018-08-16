<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emergency_cibitung extends Model
{
    public $timestamps = false; //created_at updated_at tidak ada

    protected $table = "emer_cibitung";

    public function emer_cibi(){
        return $this->belongsTo('emergency');
    }
}
