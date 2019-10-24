<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class requestController extends Controller
{
    //
    public function form(){
    	return view('request.form');
    }
}
