<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emergency extends Model
{
    public $timestamps = false; //created_at updated_at tidak ada

    protected $table = "emergency";

    protected $fillable = [
        'lokasi'
    ];

    public function IKO() {
      return $this->belongsTo(IKO::class);
    }
}
