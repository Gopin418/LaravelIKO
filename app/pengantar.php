<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengantar extends Model
{
    public $incrementing = false;

    public $timestamps = false; //created_at updated_at tidak ada

    protected $table = "pengantar";

    protected $fillable = [
        'nama_pekerjaan',
        'jenis_pekerjaan',
        'tanggal_mulai',
        'tgl_mulai',
        'tanggal_selesai',
        'tgl_selesai'
    ];

    public function kontraktor() {
        return $this->belongsTo('App\kontraktor', 'pengantar', 'id');
    }

    public function emergency() {
        return $this->belongsTo('App\emergency', 'emergency', 'id');
    }
    
}
