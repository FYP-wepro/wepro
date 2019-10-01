<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sskill extends Model
{
    //
     public function sskill()
    {
        return $this->belongsTo('App\Seller');
    }
}
