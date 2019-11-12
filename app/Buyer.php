<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    //
    public function buyerpersonal()
    {
        return $this->hasMany('App\Buyerpersonal','buyerId');
    }
}
