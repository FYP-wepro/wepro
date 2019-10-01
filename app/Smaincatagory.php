<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smaincatagory extends Model
{
     public function smaincatagory()
    {
        return $this->belongsTo('App\Seller');
    }
}
