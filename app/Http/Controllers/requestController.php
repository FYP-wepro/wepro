<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class requestController extends Controller
{
    //
    public function form(){

    	$catagoryes = DB::table('catagoryes')->get();

        return view('request.form', ['catagoryes' => $catagoryes]);



    	//echo $tasks;
    	//return view('index',compact('catagoryes',$catagoryes));

    }

    	public function sendRequest(Request $request){
        $mainCata1=$request->mainCata1;
        $jobTitle=$request->jobTitle;
        $discription=$request->discription;
        $budget=$request->budget;
        $skills=$request->skill_arr;

        $skill_string = implode (", ", $skills);
        $buyerId=session('buyerId');

        $data=array('jobTitle'=>$jobTitle,"discription"=>$discription,"budget"=>$budget,"catagory"=>$mainCata1,"skill"=>$skill_string,"buyerId"=>$buyerId);
        DB::table('requests')->insert($data);

       return response()->json(['catagory'=>$mainCata1]);
}


public function returnSeller(Request $request){


            $catagory =$request->mainCatagory;
            $sql="Select sellerId from smaincatagories whare mainCataName= $catagory";
            $sellersId = DB::select($sql);

            $sql2="Select * from sellerpersonals where id= $sellersid";
            $sellers = DB::select($sql2);

            return  json_encode($sellers);


        }


        public function showRequest(Request $request){
            $sellerId = $request->sellerId;
            $sql="Select mainCataName from smaincatagories where sellerId= $sellerId";
            $catagory = DB::select($sql);
            $first= $catagory[0]->mainCataName;
            $second= $catagory[1]->mainCataName;
            $sql2="select * from requests where catagory='$first' or catagory='$second'";
            $requests = DB::select($sql2);
            return  json_encode($requests);


        }


        public function buyerData(Request $request){
            $buyerId=$request->buyerId;
    



      $sql="select * from buyers where id = $buyerId";

      $buyers=DB::select($sql);
      
      

      if(count($buyers)>0){ 
        

          return response()->json(["buyers"=>$buyers]);
      }
      else{
          return response()->json(['errors'=>'invalid username OR Password']);
        }
        }
    


}
