<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gmp extends Model
{
    public $timestamps = false; //created_at updated_at tidak ada

    protected $table = "gmp";

    protected $casts = [
        'brg_yang_disimpan' => 'array',
    ];

    public function IKO(){
      return $this->belongsTo(IKO::class);
    }
}
