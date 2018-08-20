<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IKO_Status extends Model
{
    public $timestamps = false;

    protected $table = 'iko_status';

    public function IKO(){
      return $this->belongsTo(IKO::class);
    }
}
