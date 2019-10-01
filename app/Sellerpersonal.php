<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sellerpersonal extends Model
{
    //\
     public function seller()
    {
        return $this->belongsTo('App\Seller');
    }
}
