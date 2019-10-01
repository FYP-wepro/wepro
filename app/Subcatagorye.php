<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcatagorye extends Model
{
    //
     public function catagory()
    {
        return $this->belongsTo('App\Catagorye');
    }
}
