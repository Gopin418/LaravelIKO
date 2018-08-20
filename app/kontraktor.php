<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontraktor extends Model
{
    public $timestamps = false; //created_at updated_at tidak ada

    protected $table = "kontraktor";

    protected $fillable = [
        'id_kontraktor',
        'nama_kontraktor',
        'pj_kontraktor',
        'telp_pj_kontraktor',
        'pj_lapangan',
        'telp_pj_lapangan'
    ];

    public function IKO(){
      return $this->belongsTo(IKO::class);
    }

}
