<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class sellerController extends Controller
{
    
    public function mainCatagory(){

    	$catagoryes = DB::table('catagoryes')->get();

        return view('seller.register', ['catagoryes' => $catagoryes]);



    	//echo $tasks;
    	//return view('index',compact('catagoryes',$catagoryes));

    }


    public function subcata(Request $request){
    	
    	return response()->json($request, 200);
    }

    
}
