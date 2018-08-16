<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IKO extends Model
{
    public $timestamps = false; //created_at updated_at tidak ada

    protected $table = "IKO";

    public function pengantar() {
        return $this->hasOne('App\pengantar');
    }

    public function kontraktor() {
        return $this->hasOne('App\kontraktor');
    }

    public function project() {
        return $this->hasOne('App\nutrifood');
    }

    public function emergency() {
        return $this->hasOne('App\emergency');
    }

    public function deskripsi() {
        return $this->hasOne('App\desc_project');
    }

    public function gmp() {
        return $this->hasOne('App\gmp');
    }

    public function catatan() {
        return $this->hasOne('App\catatan');
    }

    public function status() {
        return $this->hasOne('App\IKO_Status');
    }

}
