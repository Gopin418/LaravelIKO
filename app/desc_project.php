<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class desc_project extends Model
{
    public $timestamps = false; //created_at updated_at tidak ada

    protected $table = "desc_project";

    [public function IKO() {
      return $this->belongsTo(IKO::class);
    }]
}
