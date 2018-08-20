<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengantar extends Model
{
    public $incrementing = false;

    public $timestamps = false; //created_at updated_at tidak ada

    protected $table = "pengantar";

    public function iko() {
      return $this->belongsTo(IKO::class);
    }

}
