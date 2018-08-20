<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nutrifood extends Model
{
    public $timestamps = false; //created_at updated_at tidak ada

    protected $table = "nutrifood";

    public function IKO() {
      return $this->belongsTo(IKO::class);
    }
}
