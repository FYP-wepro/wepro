<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    public function sellerpersonal()
    {
        return $this->hasMany('App\sellerpersonal','sellerId');
    }
}
