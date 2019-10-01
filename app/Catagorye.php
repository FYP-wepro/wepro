<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagorye extends Model
{
    //

     public function subCata()
    {
        return $this->hasMany('App\SubCatagorye','mainCatagoryID');
    }
}
