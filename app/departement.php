<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departement extends Model
{
    public $timestamps = false;

    public function utility(){
      return $this->belongsTo('utility', 'departement');
    }
}
