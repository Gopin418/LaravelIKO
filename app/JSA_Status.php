<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JSA_Status extends Model
{
    public $timestamps = false;

    protected $table = 'jsa_status';

    public $fillable = [
        'status'
    ];
}
