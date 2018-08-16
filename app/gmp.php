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

    protected $fillable = [
        'area_gmp',
        'brg_yang_disimpan',
        'lokasi_gudang'
    ];

    public function pengantar () {
        return $this->belongsTo('App\Pengantar');
    }
}
