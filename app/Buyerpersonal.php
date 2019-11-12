<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyerpersonal extends Model
{
    //
    public function seller()
    {
        return $this->belongsTo('App\Buyer');
    }
}
