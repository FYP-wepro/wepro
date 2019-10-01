<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ssubcatagory extends Model
{
    //
     public function ssubcatagory()
    {
        return $this->belongsTo('App\Seller');
    }
}
